<div class="newsletter-form">
    <form method="post" action="{{ route('public.newsletter.subscribe') }}">
        @csrf
        <input name="email" type="email" class="form-control" placeholder="{{ __('Enter Your Email') }}">
        <button type="submit" class="{{ Arr::get($attributes ?? [], 'class', 'btn btn-dark btn-radius') }}">{{ __('Subscribe') }}</button>

        {!! apply_filters('form_extra_fields_render', null, \Botble\Contact\Forms\Fronts\ContactForm::class) !!}
    </form>

    <div class="newsletter-message newsletter-success-message" style="display: none"></div>
    <div class="newsletter-message newsletter-error-message" style="display: none"></div>
</div>
