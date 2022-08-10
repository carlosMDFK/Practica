<div>
    <x-jet-danger-button wire:click="$set('open', true)">
        Registrar Organizaciones Comunitarias
    </x-jet-danger-button>


    <x-jet-dialog-modal wire:model="open">

        <x-slot name="title">
            Crear nuevo registro
        </x-slot>
        

        <x-slot name="content">

            <div class="mb-4">
                <x-jet-label value="Rut" />
                <x-jet-input type="text" class="w-full" wire:model="rut" />
                <!-- alerta de campo requerido -->
                <x-jet-input-error for="rut" />
            </div>

            <div class="mb-4">
                <x-jet-label value="Nombre" />
                <x-jet-input type="text" class="w-full" wire:model="nombre" />
                
            </div>

            <div class="mb-4">
                <x-jet-label value="Registro" />
                <x-jet-input type="text" class="w-full" wire:model="regis" />
            </div>

            <div class="mb-4">
                <x-jet-label value="Fojas" />
                <x-jet-input type="text" class="w-full" wire:model="fojas" />
                <x-jet-input-error for="fojas" />
            </div>
            
            <div class="mb-4">
                <x-jet-label value="Tipo de Organización" />
                <x-jet-input type="text" class="w-full" wire:model="tipo" />
            </div>

            <div class="mb-4">
                <x-jet-label value="Detalles" />
                <textarea wire:model="detalle" class="form-control w-full" rows="3"></textarea>
            </div>
            
            <div class="mb-4">
                <x-jet-label value="Zona" />
                <x-jet-input type="text" class="w-full" wire:model="zona" />
                <x-jet-input-error for="zona" />
            </div>

            <div class="mb-4">
                <x-jet-label value="Sector" />
                <x-jet-input type="text" class="w-full" wire:model="sector" />
            </div>
            
            <div class="mb-4">
                <x-jet-label value="Dirección" />
                <x-jet-input type="text" class="w-full" wire:model="direc" />
                <x-jet-input-error for="direc" />
            </div>

            <div class="mb-4">
                <x-jet-label value="Fono Sede" />
                <x-jet-input type="text" class="w-full" wire:model="fonosede" />
            </div>
            
            <div class="mb-4">
                <x-jet-label value="Unidad Vecinal" />
                <x-jet-input type="text" class="w-full" wire:model="uvecinal" />
            </div>

            <div class="mb-4">
                <x-jet-label value="Fundada" />
                <x-jet-input type="date" class="w-full" wire:model.defer="ffunda" />
                <x-jet-input-error for="ffunda" />
            </div>
            
            <div class="mb-4">
                <x-jet-label value="N° Socios" />
                <x-jet-input type="text" class="w-full" wire:model="nsocios" />                
            </div>

            <div class="mb-4">
                <x-jet-label value="Fecha Inscripción" />
                <x-jet-input type="date" class="w-full" wire:model.defer="fincrip" />
            </div>
            
            <div class="mb-4">
                <x-jet-label value="N° Decreto PJ" />
                <x-jet-input type="text" class="w-full" wire:model="ndecpj" />
            </div>

            <div class="mb-4">
                <x-jet-label value="Fecha Decreto PJ" />
                <x-jet-input type="date" class="w-full" wire:model.defer="fdecpj" />
                <x-jet-input-error for="fdecpj" />
            </div>
            
            <div class="mb-4">
                <x-jet-label value="Observaciones" />
                <textarea wire:model="obs" class="form-control w-full" rows="4"></textarea>
            </div>

            <div class="mb-4">
                <x-jet-label value="Desde" />
                <x-jet-input type="date" class="w-full" wire:model.defer="desde" />
                <x-jet-input-error for="desde" />
            </div>

            <div class="mb-4">
                <x-jet-label value="Hasta" />
                <x-jet-input type="date" class="w-full" wire:model.defer="hasta" />
                <x-jet-input-error for="hasta" />
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
