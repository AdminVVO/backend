<div class="_bgpad-lg" style="gap: 0;">
    <div class="h2-guests">Account</div>
    <div class="msgaround">
        <div class="_wcusermsg">
            <span class="_txteh" style="display: block; margin-bottom: 0;">Deactivate your account</span>
        </div>
        <button class="btn-celest" wire:click="desactiveAccount()">Desactivate</button>
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