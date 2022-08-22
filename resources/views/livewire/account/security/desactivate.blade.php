<div class="_bgpad-lg" style="gap: 0;">
    <div class="h2-guests skeleton skeleton_txt">Account</div>
    <div class="msgaround">
        <div class="_wcusermsg">
            <span class="_txteh skeleton skeleton_txt" style="display: block; margin-bottom: 0;">Deactivate your account</span>
        </div>
        <button class="btn-celest skeleton" wire:click="desactiveAccount()">Desactivate</button>
    </div>
</div>

@push('scripts')
    <script>
        window.livewire.on('reloadDisableAccount', function() {
            setTimeout(function(){
                location.reload();
            }, 2500);
        });
    </script>
@endpush