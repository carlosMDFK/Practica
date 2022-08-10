<div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-2">

        <x-direct>

            <div class="px-6 py-4 flex items-center">
                <x-jet-input class="flex-1 mr-4" placeholder="Buscar directiva" type="text" wire:model="search"/>

                @livewire('create-direc')
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
                                wire:click="order('rutpresi')">
                                RUT PRESIDENTE
                            </th>

                            <th scope="col"
                                class="cursor-pointer px-6 py-3 text-left font-medium text-black text-xl text-gray-900"
                                wire:click="order('npresi')">
                                NOMBRE    
                            </th>

                            <th scope="col"
                                class="cursor-pointer px-6 py-3 text-left font-medium text-black text-xl text-gray-900"
                                wire:click="order('direcpresi')">
                                DIRECCION    
                            </th>

                            <th scope="col"
                                class="cursor-pointer px-6 py-3 text-left font-medium text-black text-xl text-gray-900"
                                wire:click="order('fonopresi')">
                                FONO    
                            </th>

                            <th scope="col"
                                class="cursor-pointer px-6 py-3 text-left font-medium text-black text-xl text-gray-900"
                                wire:click="order('rutsecre')">
                                RUT SECRETARIO    
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
                                        {{$item->rutpresi}}
                                    </div>
                                </td>

                                <td class="px-6 py-4">
                                    <div class="text-sm text-gray-900">
                                        {{$item->npresi}}
                                    </div>
                                </td>

                                <td class="px-6 py-4">
                                    <div class="text-sm text-gray-900">
                                        {{$item->direcpresi}}
                                    </div>
                                </td>

                                <td class="px-6 py-4">
                                    <div class="text-sm text-gray-900">
                                        {{$item->fonopresi}}
                                    </div>
                                </td>

                                <td class="px-6 py-4">
                                    <div class="text-sm text-gray-900">
                                        {{$item->rutsecre}}
                                    </div>
                                </td>

                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                
                                    <div>
                                        <x-jet-secondary-button wire:click="edit({{$item}})">
                                            Editar
                                        </x-jet-secondary-button>
                                    </div>

                                    <div>
                                        <x-jet-secondary-button wire:click="$emit('deleteDirec', {{ $item->id }})">
                                            Eliminar
                                        </x-jet-secondary-button>
                                    </div>

                                    <div>
                                        <x-jet-secondary-button wire:click="ver({{$item}})">
                                            Ver
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

        </x-direct>
    </div>


    <x-jet-dialog-modal wire:model="open_edit">

        <x-slot name='title'>
            Editar el Registro Directiva
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
            <x-jet-secondary-button wire:click="$set('open_edit', false)">
                Cancelar
            </x-jet-secondary-button>

            <x-jet-danger-button wire:click="update" wire:loading.attr="disabled" class="disabled:opacity-25">
                Actualizar
            </x-jet-danger-button>
        </x-slot>

    </x-jet-dialog-modal>



    <x-jet-dialog-modal wire:model="ver_post">

        <x-slot name='title'>
            Registro 
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
            <x-jet-secondary-button wire:click="$set('ver_post', false)">
                Volver
            </x-jet-secondary-button>
        </x-slot>

    </x-jet-dialog-modal>


    @push ('js')
        <script src="sweetalert2.all.min.js"></script>
        
        <script>

            Livewire.on('deleteDirec', postId => {
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

                        Livewire.emitTo('show-directivas', 'delete', postId);

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
