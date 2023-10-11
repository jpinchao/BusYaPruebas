import React, { useState } from 'react';

const CrearCliente = () => {
    const [nombre, setNombre] = useState('');
    const [cedula, setCedula] = useState('');
    const [telefono, setTelefono] = useState('');

    const handleSubmit = (e) => {
        e.preventDefault();

        const cliente = {
            nombre: nombre,
            cedula: cedula,
            telefono: telefono
        };

        fetch('http://127.0.0.1:8000/api/clientes', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(cliente)
        })
            .then(response => response.json())
            .then(data => {
                console.log('Cliente creado exitosamente:', data);
            })
            .catch(error => console.error('Error al crear el cliente:', error));

        setNombre('');
        setCedula('');
        setTelefono('');
    };

    return (
        <div className='container text-center'>
            <h1>Crear Cliente</h1>
            <form onSubmit={handleSubmit}>
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
                <button type='submit' className='btn btn-primary mt-3'>Crear</button>
            </form>
        </div>
    );
};

export default CrearCliente;