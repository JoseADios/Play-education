<div class="d-flex flex-column" style="overflow-x: hidden">
    <div class="row">
        <div class="col-12">
            @if ($modal)
                @include('livewire.crearEstudiante')
            @endif
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            @if (session()->has('message'))
                <div class="mx-4 mb-0 alert alert-success fade show text-center" role="alert">
                    <strong>{{ session('message') }}</strong>
                </div>
            @endif
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card my-4 mx-4 pb-4">
                <div class="card-header pb-0">
                    <div class="d-flex flex-row justify-content-between">
                        <div>
                            <h5 class="mb-0">Todos los estudiantes</h5>
                        </div>
                        <button wire:click="crearEst()" class="btn bg-gradient-primary btn-sm mb-0"
                            type="button">+&nbsp;
                            Crear estudiante</button>
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
                                            Name
                                        </th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Last Name
                                        </th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Email
                                        </th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Creation Date
                                        </th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Action
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($grupo->estudiantes as $estudiante)
                                        <tr>
                                            <td class="ps-4">
                                                <p class="text-xs font-weight-bold mb-0">{{ $estudiante->id }}</p>
                                            </td>
                                            <td class="text-center">
                                                <p class="text-xs font-weight-bold mb-0">{{ $estudiante->nombre }}</p>
                                            </td>
                                            <td class="text-center">
                                                <p class="text-xs font-weight-bold mb-0">{{ $estudiante->apellido }}</p>
                                            </td>
                                            <td class="text-center">
                                                <p class="text-xs font-weight-bold mb-0">{{ $estudiante->usuario }}</p>
                                            </td>
                                            <td class="text-center">
                                                <span
                                                    class="text-secondary text-xs font-weight-bold">{{ $estudiante->created_at }}</span>
                                            </td>
                                            <td class="text-center">
                                                <a wire:click="editarEst({{ $estudiante->id }})" class="mx-3"
                                                    data-bs-toggle="tooltip" data-bs-original-title="Edit user">
                                                    <i class="fas fa-user-edit text-secondary"></i>
                                                </a>
                                                <span wire:click="eliminarEst({{ $estudiante->id }})">
                                                    <i class="cursor-pointer fas fa-trash text-secondary"></i>
                                                </span>
                                            </td>
                                        </tr>
                                    @endforeach

                                    @if ($grupo->estudiantes->isEmpty())
                                        <tr>
                                            <td colspan="6" class="text-center">
                                                <p class="text-xs font-weight-bold mb-0">No hay estudiantes en este
                                                    grupo</p>
                                            </td>
                                        </tr>
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach


</div>
