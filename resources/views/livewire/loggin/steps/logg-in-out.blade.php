<div class="content_hidden-welcome">
    <div class="log">
        <strong>Sign Up</strong>
    </div>
    <div class="modal_block-welcome">
        <div class="content_welcome-email content-f-r">
            <form wire:submit.prevent="submitLogIn">
                <h4>Name</h4>
                <input type="text" wire:model.defer="name" class="_input-mod @error('name') error_input @enderror">
                @error('name')
                    <div  class="_txterror">
                        <i class="fas fa-exclamation-circle icon1"></i> 
                        {{ $message }}
                    </div>
                @enderror   

                <h4>Last Name</h4>
                <input type="text" wire:model.defer="last_name" class="_input-mod @error('last_name') error_input @enderror">
                @error('last_name')
                    <div  class="_txterror">
                        <i class="fas fa-exclamation-circle icon1"></i> 
                        {{ $message }}
                    </div>
                @enderror   

                <p>Make sure it matches the name that appears on your official ID.</p>

                <div class="selected-modal">
                    <select wire:model.defer="gender" class="@error('gender') error_input @enderror">
                        <option value="" selected disabled>Choose option...</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>

                    <i class="fas fa-chevron-down"></i>
                </div>
                @error('gender')
                    <div  class="_txterror">
                        <i class="fas fa-exclamation-circle icon1"></i> 
                        {{ $message }}
                    </div>
                @enderror   

                <h4>Date of birth</h4>
                <label class="_lbl-date">
                    <input type="text" name="calendar" wire:model.defer="dateBirth" placeholder="dd/mm/yyyy" maxlength="10" class="_input-mod date date-v-modals @error('dateBirth') error_input @enderror">
                    @error('dateBirth')
                        <div  class="_txterror">
                            <i class="fas fa-exclamation-circle icon1"></i> 
                            {{ $message }}
                        </div>
                    @enderror   
                    <i class="far fa-calendar"></i>
                </label>
                <p>In order to register you must be at least 18 years old. We will not share your date of birth with other Airbnb users.</p>

                @if ( $content['type'] != 'email' )
                    <h4 style="margin-top: 23px;">Email Address</h4>
                    <input type="text" wire:model.defer="email" class="_input-mod email-modals @error('email') error_input @enderror" placeholder="Examples@demo.com">
                    @error('email')
                        <div  class="_txterror">
                            <i class="fas fa-exclamation-circle icon1"></i> 
                            {{ $message }}
                        </div>
                    @enderror  
                @else
                    <h4 style="margin-top: 23px;">Phone Number</h4>
                    <input type="text" wire:model.defer="phone" class="_input-mod email-modals @error('phone') error_input @enderror" placeholder="Examples@demo.com">
                    @error('phone')
                        <div  class="_txterror">
                            <i class="fas fa-exclamation-circle icon1"></i> 
                            {{ $message }}
                        </div>
                    @enderror  
                @endif

                <p class="_txtemail-des">We will send you travel confirmations and receipts by email.</p>

                <p style="text-align: center !important;">By selecting <b>Accept and Continue</b>, I agree to the VVOUTLET <a href="#">Terms of Service</a>. <a href="#">Payment Terms of Service</a>, and <a href="#">Anti-Discrimination Policy</a>. I also acknowledge the <a href="#">Privacy Policy</a>.</p>

                <div class="block_a">
                    <button class="btn_email-code btns-modals" type="submit">Accept and continue <div class="loading-btn loading-btn-modal"></div></button>
                </div>

                <div class="_line-hr" style="border-top-color: #E3EDF3; margin: 20px 0;"></div>

                <p>Voutlet le enviará ofertas exclusivas para miembros, contenido inspirador, correos electrónicos comerciales y notificaciones automáticas. Puedes optar por dejar de recibirlas en cualquier momento a través del apartado de configuración de tu cuenta o directamente desde cualquiera de las notificaciones que recibes.</p>

                <div class="checkbox-item">
                    <label class="check_click">
                        <input type="checkbox" wire:model.defer="promotion">
                        <span class="before_checkblu"></span>    
                        I do not want to receive Vvoutlet promotional messages.
                    </label>
                </div>
                
            </form>
        </div>
    </div>
</div>