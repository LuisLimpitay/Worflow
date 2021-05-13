<div class="card">
    <div class="body">
        <table class="table table-striped table-responsive">
                <thead class="thead-dark">
                   
                    <th>Nombre</th>
                    <th>Apellido</th>

                    <th>Email</th>
                    <th>Telefono</th>
                </thead>

                <tbody>
                    @foreach ($users as $user)
                        <tr>

                            <td>{{$user->name}}</td>
                            <td>{{$user->last_name}}</td>

                            <td>{{$user->email}}</td>
                            <td>{{$user->phone}}</td>
                           
                        </tr>
                    @endforeach
                </tbody>
        </table>
    </div>
</div>