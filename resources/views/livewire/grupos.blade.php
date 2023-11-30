<div class="d-flex flex-column" style="overflow-x: hidden">
    <div class="row">
        <div class="col-12">
            @if ($modal)
                @include('livewire.crearGrupo')
            @endif
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card mb-4 mx-4 pb-4">
                <div class="card-header pb-0">
                    <div class="d-flex flex-row justify-content-between">
                        <div>
                            <h5 class="mb-0">Todos los grupos</h5>
                        </div>
                        <button wire:click="crearGrupo()" class="btn bg-gradient-primary btn-sm mb-0" type="button">+&nbsp;
                            Nuevo Grupo</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @forelse ($grupos as $grupo)
        <div class="row">
            <div class="col-12">
                <div class="card mb-4 mx-4">
                    <div class="card-header pb-0">
                        <div class="d-flex flex-row justify-content-between">
                            <div>
                                <h5 class="mb-0">Nombre del Grupo: {{ $grupo->nombre }}</h5>
                            </div>
                        </div>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            ID Grupo
                                        </th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Nombre del Grupo
                                        </th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Docente
                                        </th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Contraseña Temporal
                                        </th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Fecha Expiración
                                        </th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Descripción
                                        </th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Acción
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="ps-4">
                                            <p class="text-xs font-weight-bold mb-0">{{ $grupo->id }}</p>
                                        </td>
                                        <td class="text-center">
                                            <p class="text-xs font-weight-bold mb-0">{{ $grupo->nombre }}</p>
                                        </td>
                                        <td class="text-center">
                                            <p class="text-xs font-weight-bold mb-0">{{ auth()->user()->name }} {{ auth()->user()->last_name }}</p>
                                        </td>
                                        <td class="text-center">
                                            <p class="text-xs font-weight-bold mb-0">{{ $grupo->password_temp }}</p>
                                        </td>
                                        <td class="text-center">
                                            <p class="text-xs font-weight-bold mb-0">{{ $grupo->fecha_expiracion }}</p>
                                        </td>
                                        <td class="text-center">
                                            <p class="text-xs font-weight-bold mb-0">{{ $grupo->descripcion }}</p>
                                        </td>
                                        <td class="text-center">
                                            <a wire:click="editarGrupo({{ $grupo->id }})" class="mx-3" data-bs-toggle="tooltip"
                                                data-bs-original-title="Editar grupo">
                                                <i class="fas fa-user-edit text-secondary"></i>
                                            </a>
                                            <span wire:click="borrar({{ $grupo->id }})">
                                                <i class="cursor-pointer fas fa-trash text-secondary"></i>
                                            </span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @empty
        <p>No hay grupos disponibles.</p>
    @endforelse
</div>




{{-- <div class="d-flex flex-column" style="overflow-x: hidden">
    <div class="row">
        <div class="col-12">
            @if ($modal)
                @include('livewire.crearGrupo')
            @endif
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card mb-4 mx-4 pb-4">
                <div class="card-header pb-0">
                    <div class="d-flex flex-row justify-content-between">
                        <div>
                            <h5 class="mb-0">Todos los grupos</h5>
                        </div>
                        <button wire:click="crearGrupo()" class="btn bg-gradient-primary btn-sm mb-0" type="button">+&nbsp;
                            Nuevo
                            Grupo</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @foreach ($grupos as $grupo)
        <div class="row">
            <div class="col-12">
                <div class="card mb-4 mx-4">
                    <div class="card-header pb-0">
                        <div class="d-flex flex-row justify-content-between">
                            <div>
                                <h5 class="mb-0">{{ $grupo->docente_id }}</h5>
                                <h5 class="mb-0">{{ $grupo->nombre }}</h5>
                            </div>
                        </div>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            ID
                                        </th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            ID Docente
                                        </th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Name
                                        </th>

                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Action
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($grupo->users as $grupo_id)
                                        <tr>
                                            <td class="ps-4">
                                                <p class="text-xs font-weight-bold mb-0">{{ $grupo->id }}</p>
                                            </td>
                                            <td class="text-center">
                                                <p class="text-xs font-weight-bold mb-0">{{ $grupo->nombre }}</p>
                                            </td>

                                            <td class="text-center">
                                                <a wire:click="editar({{$grupo->id}})" class="mx-3" data-bs-toggle="tooltip"
                                                    data-bs-original-title="Edit user">
                                                    <i class="fas fa-user-edit text-secondary"></i>
                                                </a>
                                                <span wire:click="borrar({{$grupo->id}})">
                                                    <i class="cursor-pointer fas fa-trash text-secondary"></i>
                                                </span>
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach


</div> --}}
