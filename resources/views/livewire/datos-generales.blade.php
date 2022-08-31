<div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-2">

        <x-table>

            <div class="px-6 py-4 flex items-center">
                <x-jet-input class="flex-1 mr-4" placeholder="Buscar registro" type="text" wire:model="search"/>

                @livewire('create-post')
            </div>

            @if($posts->count())

                <table class="min-w-full divide-y divide-gray-200">

                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col"
                                class="cursor-pointer px-6 py-3 text-left font-medium text-black text-xl text-gray-900"
                                wire:click="order('id')">                                
                                ID    
                            </th>

                            <th scope="col"
                                class="cursor-pointer px-6 py-3 text-left font-medium text-black text-xl text-gray-900"
                                wire:click="order('rut')">
                                RUT    
                            </th>

                            <th scope="col"
                                class="cursor-pointer px-6 py-3 text-left font-medium text-black text-xl text-gray-900"
                                wire:click="order('nombre')">
                                NOMBRE    
                            </th>

                            <th scope="col"
                                class="cursor-pointer px-6 py-3 text-left font-medium text-black text-xl text-gray-900"
                                wire:click="order('direc')">
                                DIRECCION    
                            </th>

                            <th scope="col"
                                class="cursor-pointer px-6 py-3 text-left font-medium text-black text-xl text-gray-900"
                                wire:click="order('sector')">
                                SECTOR    
                            </th>

                            <th scope="col"
                                class="cursor-pointer px-6 py-3 text-left font-medium text-black text-xl text-gray-900"
                                wire:click="order('zona')">
                                ZONA    
                            </th>

                            <th scope="col"
                                class="px-6 py-3 text-left font-medium text-black text-xl text-gray-900">
                                OPCIONES    
                            </th>
                        </tr>
                    </thead>

                    <thead class="bg-white divide-y divide-gray-200">

                        @foreach($posts as $item)
                            <tr>
                                <td class="px-6 py-4">
                                    <div class="text-sm text-gray-900">
                                        {{$item->id}}
                                    </div>
                                </td>

                                <td class="px-6 py-4">
                                    <div class="text-sm text-gray-900">
                                        {{$item->rut}}
                                    </div>
                                </td>

                                <td class="px-6 py-4">
                                    <div class="text-sm text-gray-900">
                                        {{$item->nombre}}
                                    </div>
                                </td>

                                <td class="px-6 py-4">
                                    <div class="text-sm text-gray-900">
                                        {{$item->direc}}
                                    </div>
                                </td>

                                <td class="px-6 py-4">
                                    <div class="text-sm text-gray-900">
                                        {{$item->sector}}
                                    </div>
                                </td>

                                <td class="px-6 py-4">
                                    <div class="text-sm text-gray-900">
                                        {{$item->zona}}
                                    </div>
                                </td>

                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                
                                    <div>
                                        <x-jet-secondary-button wire:click="edit({{$item}})">
                                            Editar
                                        </x-jet-secondary-button>
                                    </div>

                                    <div>
                                        <x-jet-secondary-button wire:click="$emit('deletePost', {{ $item->id }})">
                                            Eliminar
                                        </x-jet-secondary-button>
                                    </div>

                                    <div>
                                        <x-jet-secondary-button wire:click="ver({{$item}})">
                                            Ver
                                        </x-jet-secondary-button>
                                    </div>

                                    <div>
                                        <x-jet-secondary-button wire:click="verDirec({{$item}})">
                                            Directiva
                                        </x-jet-secondary-button>
                                    </div>

                                </td>
                                
                            </tr>
                        @endforeach

                    </thead>

                </table>

            @else
                <div class="px-6 py-4">
                    No se encontraron registros coincidentes
                </div>
            @endif

            @if ($posts->hasPages())

                <div class="px-6 py-3">
                    {{$posts->links()}}
                </div>

            @endif

        </x-table>
    </div>


    <x-jet-dialog-modal wire:model="open_edit">

        <x-slot name='title'>
            Editar el Registro
        </x-slot>

        <x-slot name='content'>
            <div class="mb-4">
                <x-jet-label value="Rut" />
                <x-jet-input wire:model="post.rut" type="text" class="w-full" />
            </div>

            <div class="mb-4">
                <x-jet-label value="Nombre" />
                <x-jet-input wire:model="post.nombre" type="text" class="w-full" />
            </div>

            <div class="mb-4">
                <x-jet-label value="Registro" />
                <x-jet-input wire:model="post.regis" type="text" class="w-full" />
            </div>

            <div class="mb-4">
                <x-jet-label value="Fojas" />
                <x-jet-input wire:model="post.fojas" type="text" class="w-full" />
            </div>

            <div class="mb-4">
                <x-jet-label value="Tipo de Organización" />
                <x-jet-input wire:model="post.tipo" type="text" class="w-full" />
            </div>

            <div class="mb-4">
                <x-jet-label value="Detalles" />
                <x-jet-input wire:model="post.detalle" type="text" class="w-full" />
            </div>

            <div class="mb-4">
                <x-jet-label value="Zona" />
                <x-jet-input wire:model="post.zona" type="text" class="w-full" />
            </div>

            <div class="mb-4">
                <x-jet-label value="Sector" />
                <x-jet-input wire:model="post.sector" type="text" class="w-full" />
            </div>

            <div class="mb-4">
                <x-jet-label value="Dirección" />
                <x-jet-input wire:model="post.direc" type="text" class="w-full" />
            </div>

            <div class="mb-4">
                <x-jet-label value="Fono Sede" />
                <x-jet-input wire:model="post.fonosede" type="text" class="w-full" />
            </div>

            <div class="mb-4">
                <x-jet-label value="Unidad vecinal" />
                <x-jet-input wire:model="post.uvecinal" type="text" class="w-full" />
            </div>

            <div class="mb-4">
                <x-jet-label value="Fundada" />
                <x-jet-input wire:model="post.ffunda" type="text" class="w-full" />
            </div>

            <div class="mb-4">
                <x-jet-label value="N° de Socios" />
                <x-jet-input wire:model="post.nsocios" type="text" class="w-full" />
            </div>

            <div class="mb-4">
                <x-jet-label value="Fecha de Inscripción" />
                <x-jet-input wire:model="post.fincrip" type="text" class="w-full" />
            </div>

            <div class="mb-4">
                <x-jet-label value="N° Decreto PJ" />
                <x-jet-input wire:model="post.ndecpj" type="text" class="w-full" />
            </div>

            <div class="mb-4">
                <x-jet-label value="Fecha Decreto PJ" />
                <x-jet-input wire:model="post.fdecpj" type="text" class="w-full" />
            </div>

            <div class="mb-4">
                <x-jet-label value="Observaciones" />
                <x-jet-input wire:model="post.obs" type="text" class="w-full" />
            </div>

            <div class="mb-4">
                <x-jet-label value="Desde" />
                <x-jet-input wire:model="post.desde" type="text" class="w-full" />
            </div>

            <div class="mb-4">
                <x-jet-label value="Hasta" />
                <x-jet-input wire:model="post.hasta" type="text" class="w-full" />
            </div>
        </x-slot>

        <x-slot name='footer'>
            <x-jet-secondary-button wire:click="$set('open_edit', false)">
                Cancelar
            </x-jet-secondary-button>

            <x-jet-danger-button wire:click="update" wire:loading.attr="disabled" class="disabled:opacity-25">
                Actualizar
            </x-jet-danger-button>
        </x-slot>

    </x-jet-dialog-modal>

    <x-jet-dialog-modal wire:model="ver_direc">

        <x-slot name='title'>
            Registro Directivas
        </x-slot>

        <x-slot name='content'>
            <div class="mb-4">
                <x-jet-label value="Rut presidente" />
                <x-jet-input wire:model="post.rutpresi" type="submit" class="px-6 py-3 text-left" />
            </div>

            <div class="mb-4">
                <x-jet-label value="Nombre" />
                <x-jet-input wire:model="post.npresi" type="submit" class="px-6 py-3 text-left" />
            </div>

            <div class="mb-4">
                <x-jet-label value="Dirección" />
                <x-jet-input wire:model="post.direcpresi" type="submit" class="px-6 py-3 text-left" />
            </div>

            <div class="mb-4">
                <x-jet-label value="fono" />
                <x-jet-input wire:model="post.fonopresi" type="submit" class="px-6 py-3 text-left" />
            </div>

            <div class="mb-4">
                <x-jet-label value="Rut secretario" />
                <x-jet-input wire:model="post.rutsecre" type="submit" class="px-6 py-3 text-left" />
            </div>

            <div class="mb-4">
                <x-jet-label value="Nombre" />
                <x-jet-input wire:model="post.nsecre" type="submit" class="px-6 py-3 text-left" />
            </div>

            <div class="mb-4">
                <x-jet-label value="Dirección" />
                <x-jet-input wire:model="post.direcsecre" type="submit" class="px-6 py-3 text-left" />
            </div>

            <div class="mb-4">
                <x-jet-label value="Fono" />
                <x-jet-input wire:model="post.fonosecre" type="submit" class="px-6 py-3 text-left" />
            </div>

            <div class="mb-4">
                <x-jet-label value="Rut tesorero" />
                <x-jet-input wire:model="post.rutteso" type="submit" class="px-6 py-3 text-left" />
            </div>

            <div class="mb-4">
                <x-jet-label value="Nombre" />
                <x-jet-input wire:model="post.nteso" type="submit" class="px-6 py-3 text-left" />
            </div>

            <div class="mb-4">
                <x-jet-label value="Dirección" />
                <x-jet-input wire:model="post.directeso" type="submit" class="px-6 py-3 text-left" />
            </div>

            <div class="mb-4">
                <x-jet-label value="Fono" />
                <x-jet-input wire:model="post.fonoteso" type="submit" class="px-6 py-3 text-left" />
            </div>

            <div class="mb-4">
                <x-jet-label value="Rut director 1" />
                <x-jet-input wire:model="post.rutdirec1" type="submit" class="px-6 py-3 text-left" />
            </div>

            <div class="mb-4">
                <x-jet-label value="Nombre" />
                <x-jet-input wire:model="post.ndirec1" type="submit" class="px-6 py-3 text-left" />
            </div>

            <div class="mb-4">
                <x-jet-label value="Dirección" />
                <x-jet-input wire:model="post.direcdirec1" type="submit" class="px-6 py-3 text-left" />
            </div>

            <div class="mb-4">
                <x-jet-label value="Fono" />
                <x-jet-input wire:model="post.fonodirec1" type="submit" class="px-6 py-3 text-left" />
            </div>

            <div class="mb-4">
                <x-jet-label value="Rut director 2" />
                <x-jet-input wire:model="post.rutdirec2" type="submit" class="px-6 py-3 text-left" />
            </div>

            <div class="mb-4">
                <x-jet-label value="Nombre" />
                <x-jet-input wire:model="post.ndirec2" type="submit" class="px-6 py-3 text-left" />
            </div>

            <div class="mb-4">
                <x-jet-label value="Dirección" />
                <x-jet-input wire:model="post.direcdirec2" type="submit" class="px-6 py-3 text-left" />
            </div>
            
            <div class="mb-4">
                <x-jet-label value="Fono" />
                <x-jet-input wire:model="post.fonodirec2" type="submit" class="px-6 py-3 text-left" />
            </div>
        </x-slot>

        <x-slot name='footer'>
            <x-jet-secondary-button wire:click="$set('ver_direc', false)">
                Volver
            </x-jet-secondary-button>   
            <x-jet-secondary-button wire:click="$set('direct_edit', true)">
                Editar Directiva
            </x-jet-secondary-button>        
        </x-slot>

    </x-jet-dialog-modal>

    <x-jet-dialog-modal wire:model="ver_post">

        <x-slot name='title'>
            Registro 
        </x-slot>

        <x-slot name='content'>
            <div class="mb-4">
                <x-jet-label value="Rut" />
                <x-jet-input wire:model="post.rut" type="submit" class="px-6 py-3 text-left" />
            </div>

            <div class="mb-4">
                <x-jet-label value="Nombre" />
                <x-jet-input wire:model="post.nombre" type="submit" class="px-6 py-3 text-left" />
            </div>

            <div class="mb-4">
                <x-jet-label value="Registro" />
                <x-jet-input wire:model="post.regis" type="submit" class="px-6 py-3 text-left" />
            </div>

            <div class="mb-4">
                <x-jet-label value="Fojas" />
                <x-jet-input wire:model="post.fojas" type="submit" class="px-6 py-3 text-left" />
            </div>

            <div class="mb-4">
                <x-jet-label value="Tipo de Organización" />
                <x-jet-input wire:model="post.tipo" type="submit" class="px-6 py-3 text-left" />
            </div>

            <div class="mb-4">
                <x-jet-label value="Detalles" />
                <x-jet-input wire:model="post.detalle" type="submit" class="px-6 py-3 text-left" />
            </div>

            <div class="mb-4">
                <x-jet-label value="Zona" />
                <x-jet-input wire:model="post.zona" type="submit" class="px-6 py-3 text-left" />
            </div>

            <div class="mb-4">
                <x-jet-label value="Sector" />
                <x-jet-input wire:model="post.sector" type="submit" class="px-6 py-3 text-left" />
            </div>

            <div class="mb-4">
                <x-jet-label value="Dirección" />
                <x-jet-input wire:model="post.direc" type="submit" class="px-6 py-3 text-left" />
            </div>

            <div class="mb-4">
                <x-jet-label value="Fono Sede" />
                <x-jet-input wire:model="post.fonosede" type="submit" class="px-6 py-3 text-left" />
            </div>

            <div class="mb-4">
                <x-jet-label value="Unidad vecinal" />
                <x-jet-input wire:model="post.uvecinal" type="submit" class="px-6 py-3 text-left" />
            </div>

            <div class="mb-4">
                <x-jet-label value="Fundada" />
                <x-jet-input wire:model="post.ffunda" type="submit" class="px-6 py-3 text-left" />
            </div>

            <div class="mb-4">
                <x-jet-label value="N° de Socios" />
                <x-jet-input wire:model="post.nsocios" type="submit" class="px-6 py-3 text-left" />
            </div>

            <div class="mb-4">
                <x-jet-label value="Fecha de Inscripción" />
                <x-jet-input wire:model="post.fincrip" type="submit" class="px-6 py-3 text-left" />
            </div>

            <div class="mb-4">
                <x-jet-label value="N° Decreto PJ" />
                <x-jet-input wire:model="post.ndecpj" type="submit" class="px-6 py-3 text-left" />
            </div>

            <div class="mb-4">
                <x-jet-label value="Fecha Decreto PJ" />
                <x-jet-input wire:model="post.fdecpj" type="submit" class="px-6 py-3 text-left" />
            </div>

            <div class="mb-4">
                <x-jet-label value="Observaciones" />
                <x-jet-input wire:model="post.obs" type="submit" class="px-6 py-3 text-left" />
            </div>

            <div class="mb-4">
                <x-jet-label value="Desde" />
                <x-jet-input wire:model="post.desde" type="submit" class="px-6 py-3 text-left" />
            </div>

            <div class="mb-4">
                <x-jet-label value="Hasta" />
                <x-jet-input wire:model="post.hasta" type="submit" class="px-6 py-3 text-left" />
            </div>
        </x-slot>

        <x-slot name='footer'>
            <x-jet-secondary-button wire:click="$set('ver_post', false)">
                Volver
            </x-jet-secondary-button>
        </x-slot>

    </x-jet-dialog-modal>

    <x-jet-dialog-modal wire:model="direct_edit">

        <x-slot name='title'>
            Editar Directivas
        </x-slot>

        <x-slot name='content'>
            <div class="mb-4">
                <x-jet-label value="Rut presidente" />
                <x-jet-input wire:model="post.rutpresi" type="text" class="w-full" />                
            </div>

            <div class="mb-4">
                <x-jet-label value="Nombre" />
                <x-jet-input wire:model="post.npresi" type="text" class="w-full" />
            </div>

            <div class="mb-4">
                <x-jet-label value="Dirección" />
                <x-jet-input wire:model="post.direcpresi" type="text" class="w-full" />
            </div>

            <div class="mb-4">
                <x-jet-label value="fono" />
                <x-jet-input wire:model="post.fonopresi" type="text" class="w-full" />
            </div>

            <div class="mb-4">
                <x-jet-label value="Rut secretario" />
                <x-jet-input wire:model="post.rutsecre" type="text" class="w-full" />
            </div>

            <div class="mb-4">
                <x-jet-label value="Nombre" />
                <x-jet-input wire:model="post.nsecre" type="text" class="w-full" />
            </div>

            <div class="mb-4">
                <x-jet-label value="Dirección" />
                <x-jet-input wire:model="post.direcsecre" type="text" class="w-full" />
            </div>

            <div class="mb-4">
                <x-jet-label value="Fono" />
                <x-jet-input wire:model="post.fonosecre" type="text" class="w-full" />
            </div>

            <div class="mb-4">
                <x-jet-label value="Rut tesorero" />
                <x-jet-input wire:model="post.rutteso" type="text" class="w-full" />
            </div>

            <div class="mb-4">
                <x-jet-label value="Nombre" />
                <x-jet-input wire:model="post.nteso" type="text" class="w-full" />
            </div>

            <div class="mb-4">
                <x-jet-label value="Dirección" />
                <x-jet-input wire:model="post.directeso" type="text" class="w-full" />
            </div>

            <div class="mb-4">
                <x-jet-label value="Fono" />
                <x-jet-input wire:model="post.fonoteso" type="text" class="w-full" />
            </div>

            <div class="mb-4">
                <x-jet-label value="Rut director 1" />
                <x-jet-input wire:model="post.rutdirec1" type="text" class="w-full" />
            </div>

            <div class="mb-4">
                <x-jet-label value="Nombre" />
                <x-jet-input wire:model="post.ndirec1" type="text" class="w-full" />
            </div>

            <div class="mb-4">
                <x-jet-label value="Dirección" />
                <x-jet-input wire:model="post.direcdirec1" type="text" class="w-full" />
            </div>

            <div class="mb-4">
                <x-jet-label value="Fono" />
                <x-jet-input wire:model="post.fonodirec1" type="text" class="w-full" />
            </div>

            <div class="mb-4">
                <x-jet-label value="Rut director 2" />
                <x-jet-input wire:model="post.rutdirec2" type="text" class="w-full" />
            </div>

            <div class="mb-4">
                <x-jet-label value="Nombre" />
                <x-jet-input wire:model="post.ndirec2" type="text" class="w-full" />
            </div>

            <div class="mb-4">
                <x-jet-label value="Dirección" />
                <x-jet-input wire:model="post.direcdirec2" type="text" class="w-full" />
            </div>
            
            <div class="mb-4">
                <x-jet-label value="Fono" />
                <x-jet-input wire:model="post.fonodirec2" type="text" class="w-full" />
            </div>
        </x-slot>

        <x-slot name='footer'>
            <x-jet-secondary-button wire:click="$set('direct_edit', false)">
                Cancelar
            </x-jet-secondary-button>

            <x-jet-danger-button wire:click="update" wire:loading.attr="disabled" class="disabled:opacity-25">
                Actualizar
            </x-jet-danger-button>
        </x-slot>

    </x-jet-dialog-modal>


    @push('js')
        <script src="sweetalert2.all.min.js"></script>
        
        <script>

            Livewire.on('deletePost', postId => {
                Swal.fire({
                    title: '¿Estas seguro?',
                    text: "¡No podrás revertir esto!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: '¡Sí, bórralo!'
                }).then((result) => {
                    if (result.isConfirmed) {

                        Livewire.emitTo('datos-generales', 'delete', postId);

                        Swal.fire(
                            '¡Eliminado!',
                            'Su archivo ha sido eliminado.',
                            'success'
                        )
                    }
                })
            });

        </script>
    @endpush

</div>
