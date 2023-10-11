import React, { useEffect, useState } from 'react';
import { BrowserRouter as Router, Route, Link } from 'react-router-dom';
import CrearCliente from './CrearCliente'
import ClientesList from './ClientesList'

function Header() {
    return (
        <header>
            <nav class="navbar navbar-expand-lg bg-body-tertiary rounded" aria-label="Twelfth navbar example">
                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample10" aria-controls="navbarsExample10" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample10">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <p class="nav-link active" aria-current="page">Menu de navegación</p>
                            </li>
                            <li class="nav-item">
                            </li>
                            <li class="nav-item">
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
    )
}

export default Header