<div class="contact-form-wrap">
    <div class="contact-form-line">
        <label class="contact-form-label" for="subject">{{ 'Konu' }}</label>
        <select class="contact-form-input" id="subject" name="subject" required>
            @foreach($subjects as $subject)
                <option value="{{ $subject->id }}" {{ old('subject') == $subject->id ? 'selected' : '' }}>
                    {{ $subject->name }}
                </option>
            @endforeach
        </select>
    </div>
    <div class="contact-form-line">
        <label class="contact-form-label" for="fullname">{{ 'Adınız Soyadınız' }}</label>
        <input value="{{ old('fullname') }}" class="contact-form-input" type="text"
               id="fullname"
               name="fullname" required>
    </div>
    <div class="contact-form-line">
        <label class="contact-form-label" for="email">{{ 'Telefon Numaranız' }}</label>
        <input value="{{ old('phone') }}" class="contact-form-input" type="text" id="phone"
               name="phone" required>
    </div>
    <div class="contact-form-line">
        <label class="contact-form-label" for="email">{{ 'Mail Adresiniz' }}</label>
        <input value="{{ old('email') }}" class="contact-form-input" type="email" id="email"
               name="email" required>
    </div>
    <div class="contact-form-line">
        <label class="contact-form-label" for="message">{{ 'Mesajınız' }}</label>
        <textarea class="contact-form-input" id="message" name="message" rows="8"
                  required>{{ old('message') }}</textarea>
    </div>
</div>
