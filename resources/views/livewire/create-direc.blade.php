<div>
    <x-jet-danger-button wire:click="$set('open', true)">
        Registrar datos de directiva
    </x-jet-danger-button>


    <x-jet-dialog-modal wire:model="open">

        <x-slot name="title">
            Crear nueva directiva
        </x-slot>
        

        <x-slot name="content">

            <div class="mb-4">
                <x-jet-label value="Rut presidente" />
                <x-jet-input type="text" class="w-full" wire:model="rutpresi" />
                <!-- alerta de campo requerido -->
                <x-jet-input-error for="rutpresi" />
            </div>

            <div class="mb-4">
                <x-jet-label value="Nombre" />
                <x-jet-input type="text" class="w-full" wire:model="npresi" />
                
            </div>

            <div class="mb-4">
                <x-jet-label value="Dirección" />
                <x-jet-input type="text" class="w-full" wire:model="direcpresi" />
            </div>

            <div class="mb-4">
                <x-jet-label value="fono" />
                <x-jet-input type="text" class="w-full" wire:model="fonopresi" />
                <x-jet-input-error for="fonopresi" />
            </div>
            
            <div class="mb-4">
                <x-jet-label value="Rut secretario" />
                <x-jet-input type="text" class="w-full" wire:model="rutsecre" />
            </div>

            <div class="mb-4">
                <x-jet-label value="Nombre" />
                <x-jet-input type="text" class="w-full" wire:model="nsecre" />
            </div>
            
            <div class="mb-4">
                <x-jet-label value="Dirección" />
                <x-jet-input type="text" class="w-full" wire:model="direcsecre" />
                <x-jet-input-error for="direcsecre" />
            </div>

            <div class="mb-4">
                <x-jet-label value="Fono" />
                <x-jet-input type="text" class="w-full" wire:model="fonosecre" />
            </div>
            
            <div class="mb-4">
                <x-jet-label value="Rut tesorero" />
                <x-jet-input type="text" class="w-full" wire:model="rutteso" />
                <x-jet-input-error for="rutteso" />
            </div>

            <div class="mb-4">
                <x-jet-label value="Nombre" />
                <x-jet-input type="text" class="w-full" wire:model="nteso" />
            </div>
            
            <div class="mb-4">
                <x-jet-label value="Dirección" />
                <x-jet-input type="text" class="w-full" wire:model="directeso" />
            </div>

            <div class="mb-4">
                <x-jet-label value="Fono" />
                <x-jet-input type="text" class="w-full" wire:model.defer="fonoteso" />
                <x-jet-input-error for="fonoteso" />
            </div>
            
            <div class="mb-4">
                <x-jet-label value="Rut director 1" />
                <x-jet-input type="text" class="w-full" wire:model="rutdirec1" />                
            </div>

            <div class="mb-4">
                <x-jet-label value="Nombre" />
                <x-jet-input type="text" class="w-full" wire:model.defer="ndirec1" />
            </div>
            
            <div class="mb-4">
                <x-jet-label value="Dirección" />
                <x-jet-input type="text" class="w-full" wire:model="direcdirec1" />
            </div>

            <div class="mb-4">
                <x-jet-label value="Fono" />
                <x-jet-input type="text" class="w-full" wire:model.defer="fonodirec1" />
                <x-jet-input-error for="fonodirec1" />
            </div>
            
            <div class="mb-4">
                <x-jet-label value="Rut director 2" />
                <x-jet-input type="text" class="w-full" wire:model="rutdirec2" />
            </div>

            <div class="mb-4">
                <x-jet-label value="Nombre" />
                <x-jet-input type="text" class="w-full" wire:model.defer="ndirec2" />
                <x-jet-input-error for="ndirec2" />
            </div>

            <div class="mb-4">
                <x-jet-label value="Dirección" />
                <x-jet-input type="text" class="w-full" wire:model.defer="direcdirec2" />
                <x-jet-input-error for="direcdirec2" />
            </div>

            <div class="mb-4">
                <x-jet-label value="Fono" />
                <x-jet-input type="text" class="w-full" wire:model.defer="fonodirec2" />
            </div>
            
        </x-slot>


        <x-slot name="footer">
            <x-jet-secondary-button wire:click="$set('open', false)">
                Cancelar
            </x-jet-secondary-button>

            <x-jet-danger-button wire:click="save" wire:loading.attr="disabled" wire:target="save" class="disabled:opacity-25">
                Guardar
            </x-jet-danger-button>
        </x-slot>

    </x-jet-dialog-modal>
</div>
