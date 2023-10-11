import { useEffect, useState } from "react";
import { useLocation } from "react-router-dom";

const EditarCliente = (props) => {
    const location = useLocation();
    const data = location.state;
    const clienteId = data.id;

    const [id, setId] = useState('');
    const [nombre, setNombre] = useState('');
    const [cedula, setCedula] = useState('');
    const [telefono, setTelefono] = useState('');

    const handleEdit = (e) => {
        e.preventDefault();

        const cliente = {
            id: id,
            nombre: nombre,
            cedula: cedula,
            telefono: telefono
        };


        fetch(`http://127.0.0.1:8000/api/clientes`, {
            method: 'PUT',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(cliente)
        })
            .then(response => response.json())
            .then(data => {
                console.log('Cliente modificado exitosamente:', data);
            })
            .catch(error => console.error('Error al Modificar el cliente:', error));

        setNombre('');
        setCedula('');
        setTelefono('');
    };


    useEffect(() => {

        fetch(`http://127.0.0.1:8000/api/clientes/${clienteId}`)
            .then(response => response.json())
            .then(data => {
                setId(data.id);
                setNombre(data.nombre);
                setCedula(data.cedula);
                setTelefono(data.telefono);
            })
            .catch(error => console.error('Error al obtener los detalles del cliente:', error));
    }, [clienteId]);

    return (
        
        <div className='container text-center'>
            <br />
            <br />
            <br />
            <h1>Modificar Cliente</h1>
            <form onSubmit={handleEdit}>
                <div>
                    <label>Nombre del cliente</label>
                    <input type='text' value={nombre} onChange={(e) => setNombre(e.target.value)} className='form-control' />
                </div>
                <div>
                    <label>Cedula del cliente</label>
                    <input type='text' value={cedula} onChange={(e) => setCedula(e.target.value)} className='form-control' />
                </div>
                <div>
                    <label>Telefono del cliente</label>
                    <input type='text' value={telefono} onChange={(e) => setTelefono(e.target.value)} className='form-control' />
                </div>
                <button type='submit' className='btn btn-primary mt-3'>Editar</button>
            </form>
        </div>
    );
};

export default EditarCliente;