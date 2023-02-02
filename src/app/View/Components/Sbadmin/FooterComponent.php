<?php 

namespace App\View\Components\Sbadmin;

use Illuminate\View\Component;

class FooterComponent extends Component
{
    public bool $showPrivacyPolicyLink;
    public string $privacyPolicyLink;
    public bool $showTermsConditionsLink;
    public string $TermsConditionsLink;
    public string $currentYear;
    public string $appName;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->showPrivacyPolicyLink = config('sbadmin.show_privacy_policy_link');
        $this->privacyPolicyLink = config('sbadmin.privacy_policy_link');
        $this->showTermsConditionsLink = config('sbadmin.show_terms_conditions_link');
        $this->TermsConditionsLink = config('sbadmin.terms_conditions_link');
        $this->currentYear = date('Y', time());
        $this->appName = env('APP_NAME', 'SBAdmin');
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.sbadmin.footer-component');
    }
}