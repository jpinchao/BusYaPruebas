import React, { useEffect, useState } from 'react';
import { Link } from 'react-router-dom';

const ClientesList = () => {
    const [clientes, setClientes] = useState([]);

    useEffect(() => {
        fetch('http://127.0.0.1:8000/api/clientes')
            .then(res => res.json())
            .then(data => setClientes(data))
            .catch(error => console.log(error))
    }, []);

    const handleDelete = (id) => {
        console.log("xxxx", id);
        fetch(`http://127.0.0.1:8000/api/clientes/${id}`, {
            method: 'DELETE',
            headers: {
                'Content-Type': 'application/json',
                // Otros encabezados si son necesarios
            },
            // Puedes incluir el cuerpo de la solicitud si es necesario
            // body: JSON.stringify(data),
        })
            .then(response => {
                if (response.ok) {
                    // Si la respuesta es exitosa, puedes realizar acciones adicionales aquí
                    console.log('Cliente eliminado correctamente');
                } else {
                    throw new Error('Error al eliminar el cliente');
                }
            })
            .catch(error => {
                console.error('Error en la solicitud DELETE:', error);
            });
    };

    return (
        <div className='container text-center'>
            <h1>Lista de Clientes</h1>
            {clientes.map(cliente => (
                <div key={cliente.id}>
                    <div>
                        <p><b>Nombre del cliente: </b>{cliente.nombre}</p>
                        <p><b>Cedula del cliente: </b>{cliente.cedula}</p>
                        <p><b>Telefono del cliente: </b>{cliente.telefono}</p>
                    </div>
                    <button onClick={() => handleDelete(cliente.id)}>Eliminar</button>
                    <Link to='/clientes/editar' state={cliente}>
                        <button>Editar</button>
                    </Link>
                </div>
            ))}
        </div>
    );
};

export default ClientesList;


