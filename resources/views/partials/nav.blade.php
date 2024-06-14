
<thead class="table table-bordered">
    <tr>
        <th scope="col" class="{{ setActivo('home')}}"><a href="/">Home</a></th>
        <th scope="col" class="{{ setActivo('nosotros')}}"><a href="nosotros">Nosotros</a></th>
        <th scope="col" class="{{ setActivo('servicios.index')}}"><a href="servicios">Servicios</a></th>
        <th scope="col" class="{{ setActivo('contacto')}}"><a href="contacto">Contacto</a></th>
    </tr>
    <tr>
        <td colspan="4">
            <!-- Agregamos la directiva para agregar contenido dinamico-->
            @yield('content')
        </td>
    </tr>
</thead>
