import React from 'react'
import ReactDOM from 'react-dom/client'
import './App.css'
import 'bootstrap/dist/css/bootstrap.min.css'
import App from './App.jsx'
import Header from './Header.jsx'
import ClientesList from "./ClientesList"
import CrearCliente from "./CrearCliente"
import { BrowserRouter, Route, Routes } from 'react-router-dom'
import EditarCliente from './EditarCliente'

ReactDOM.createRoot(document.getElementById('root')).render(
  <React.StrictMode>
    <Header />
    <App />
    <CrearCliente />
    <BrowserRouter>
      <Routes>
        <Route exact path="/" element={<ClientesList />} />
        <Route exact path="/clientes/editar" element={<EditarCliente />} />
      </Routes>
    </BrowserRouter>
  </React.StrictMode>,
)
