<footer class="py-4 bg-light mt-auto">
    <div class="container-fluid px-4">
        <div class="d-flex align-items-center justify-content-between small">
            <div class="text-muted">Copyright &copy; {{ $appName }} {{ $currentYear }}</div>
            <div>
                @if($showPrivacyPolicyLink)
                    <a href="{{ $privacyPolicyLink }}" target="_blank">{{ __('Privacy Policy') }}</a>
                @endif
                &middot;
                @if ($showTermsConditionsLink)
                    <a href="{{ $TermsConditionsLink }}" target="_blank">{{ __('Terms') }} &amp; {{ __('Conditions') }}</a>
                @endif
            </div>
        </div>
    </div>
</footer>
