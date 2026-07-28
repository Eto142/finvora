@include('user.header')

    
    <main class="transition-all duration-200 lg:ml-64 pt-16 min-h-screen">
        
        <div x-data="{ toasts: [] }"
             x-init="
                                             "
             class="fixed top-20 right-4 z-50 space-y-2 w-80">
            <template x-for="toast in toasts" :key="toast.id">
                <div x-transition:enter="transition ease-out duration-300"
                     x-transition:enter-start="translate-x-full opacity-0"
                     x-transition:enter-end="translate-x-0 opacity-100"
                     x-transition:leave="transition ease-in duration-200"
                     x-transition:leave-start="translate-x-0 opacity-100"
                     x-transition:leave-end="translate-x-full opacity-0"
                     :class="{
                        'bg-gain/10 border-gain/20 text-gain': toast.type === 'success',
                        'bg-loss/10 border-loss/20 text-loss': toast.type === 'error',
                        'bg-warning/10 border-warning/20 text-warning': toast.type === 'warning',
                     }"
                     class="border rounded-lg p-4 flex items-start gap-3 shadow-lg backdrop-blur-sm">
                    <span x-text="toast.message" class="text-sm flex-1"></span>
                    <button @click="toasts = toasts.filter(t => t.id !== toast.id)" class="shrink-0 opacity-60 hover:opacity-100">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
</svg>
                    </button>
                </div>
            </template>
        </div>

        <div class="p-4 lg:p-6 space-y-6">
            
    <div>
    </div>    <div>
    </div>

    
    <div class="w-full overflow-hidden rounded-lg border border-surface-border bg-surface-raised mb-6">
    <!-- TradingView Widget BEGIN -->
    <div class="tradingview-widget-container">
        <div class="tradingview-widget-container__widget"></div>
        <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
        {
            "symbols": [
                {"proName": "FOREXCOM:SPXUSD", "title": "S&P 500 Index"},
                {"proName": "FOREXCOM:NSXUSD", "title": "US 100 Cash CFD"},
                {"proName": "FX_IDC:EURUSD", "title": "EUR to USD"},
                {"proName": "BITSTAMP:BTCUSD", "title": "Bitcoin"},
                {"proName": "BITSTAMP:ETHUSD", "title": "Ethereum"},
                {"proName": "FOREXCOM:UKXGBP", "title": "UK 100"}
            ],
            "showSymbolLogo": true,
            "isTransparent": true,
            "displayMode": "regular",
            "colorTheme": "dark",
            "locale": "en"
        }
        </script>
    </div>
    <!-- TradingView Widget END -->
</div>

    
    <div class="flex flex-wrap gap-2 mb-6">
    <a href="{{ url('/') }}" class="inline-flex items-center gap-1.5 px-3 py-1.5 text-xs font-medium rounded-lg transition-colors
        bg-surface-overlay text-content-secondary hover:bg-surface-border hover:text-content-primary">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
</svg>
 Dashboard
    </a>
    <a href="{{ route('user.deposit') }}" class="inline-flex items-center gap-1.5 px-3 py-1.5 text-xs font-medium rounded-lg transition-colors
        bg-surface-overlay text-content-secondary hover:bg-surface-border hover:text-content-primary">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75V16.5M16.5 12 12 16.5m0 0L7.5 12m4.5 4.5V3" />
</svg>
 Deposit
    </a>
        <a href="{{ route('user.investment.plan') }}" class="inline-flex items-center gap-1.5 px-3 py-1.5 text-xs font-medium rounded-lg transition-colors
        bg-primary text-content-inverse">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18.75a60.07 60.07 0 0 1 15.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 0 1 3 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 0 0-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 0 1-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 0 0 3 15h-.75M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm3 0h.008v.008H18V10.5Zm-12 0h.008v.008H6V10.5Z" />
</svg>
 Invest
    </a>
            <a href="{{ route('user.withdrawal') }}" class="inline-flex items-center gap-1.5 px-3 py-1.5 text-xs font-medium rounded-lg transition-colors
        bg-surface-overlay text-content-secondary hover:bg-surface-border hover:text-content-primary">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75V16.5m-13.5-9L12 3m0 0 4.5 4.5M12 3v13.5" />
</svg>
 Withdraw
    </a>
            <a href="{{ route('user.trade') }}" class="inline-flex items-center gap-1.5 px-3 py-1.5 text-xs font-medium rounded-lg transition-colors
        bg-surface-overlay text-content-secondary hover:bg-surface-border hover:text-content-primary">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 0 1 3 19.875v-6.75ZM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V8.625ZM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V4.125Z" />
</svg>
 Trade
    </a>
    <!--<a href="{{ route('user.portfolio') }}" class="inline-flex items-center gap-1.5 px-3 py-1.5 text-xs font-medium rounded-lg transition-colors-->
    <!--    bg-surface-overlay text-content-secondary hover:bg-surface-border hover:text-content-primary">-->
    <!--    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 14.15v4.25c0 1.094-.787 2.036-1.872 2.18-2.087.277-4.216.42-6.378.42s-4.291-.143-6.378-.42c-1.085-.144-1.872-1.086-1.872-2.18v-4.25m16.5 0a2.18 2.18 0 0 0 .75-1.661V8.706c0-1.081-.768-2.015-1.837-2.175a48.114 48.114 0 0 0-3.413-.387m4.5 8.006c-.194.165-.42.295-.673.38A23.978 23.978 0 0 1 12 15.75c-2.648 0-5.195-.429-7.577-1.22a2.016 2.016 0 0 1-.673-.38m0 0A2.18 2.18 0 0 1 3 12.489V8.706c0-1.081.768-2.015 1.837-2.175a48.111 48.111 0 0 1 3.413-.387m7.5 0V5.25A2.25 2.25 0 0 0 13.5 3h-3a2.25 2.25 0 0 0-2.25 2.25v.894m7.5 0a48.667 48.667 0 0 0-7.5 0M12 12.75h.008v.008H12v-.008Z" />
</svg>
 Portfolio-->
    <!--</a>-->
    <!--<a href="{{ route('user.trade') }}s/positions" class="inline-flex items-center gap-1.5 px-3 py-1.5 text-xs font-medium rounded-lg transition-colors-->
    <!--    bg-surface-overlay text-content-secondary hover:bg-surface-border hover:text-content-primary">-->
    <!--    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="m3.75 13.5 10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75Z" />
</svg>
 Positions-->
    <!--</a>-->
    <a href="{{ route('user.markets') }}" class="inline-flex items-center gap-1.5 px-3 py-1.5 text-xs font-medium rounded-lg transition-colors
        bg-surface-overlay text-content-secondary hover:bg-surface-border hover:text-content-primary">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M12 21v-8.25M15.75 21v-8.25M8.25 21v-8.25M3 9l9-6 9 6m-1.5 12V10.332A48.36 48.36 0 0 0 12 9.75c-2.551 0-5.056.2-7.5.582V21M3 21h18M12 6.75h.008v.008H12V6.75Z" />
</svg>
 Markets
    </a>
        <a href="{{ route('user.transactions') }}" class="inline-flex items-center gap-1.5 px-3 py-1.5 text-xs font-medium rounded-lg transition-colors
        bg-surface-overlay text-content-secondary hover:bg-surface-border hover:text-content-primary">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" />
</svg>
 Transactions
    </a>
    <a href="{{ route('user.profile') }}" class="inline-flex items-center gap-1.5 px-3 py-1.5 text-xs font-medium rounded-lg transition-colors
        bg-surface-overlay text-content-secondary hover:bg-surface-border hover:text-content-primary">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.325.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 0 1 1.37.49l1.296 2.247a1.125 1.125 0 0 1-.26 1.431l-1.003.827c-.293.241-.438.613-.43.992a7.723 7.723 0 0 1 0 .255c-.008.378.137.75.43.991l1.004.827c.424.35.534.955.26 1.43l-1.298 2.247a1.125 1.125 0 0 1-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.47 6.47 0 0 1-.22.128c-.331.183-.581.495-.644.869l-.213 1.281c-.09.543-.56.94-1.11.94h-2.594c-.55 0-1.019-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 0 1-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 0 1-1.369-.49l-1.297-2.247a1.125 1.125 0 0 1 .26-1.431l1.004-.827c.292-.24.437-.613.43-.991a6.932 6.932 0 0 1 0-.255c.007-.38-.138-.751-.43-.992l-1.004-.827a1.125 1.125 0 0 1-.26-1.43l1.297-2.247a1.125 1.125 0 0 1 1.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.086.22-.128.332-.183.582-.495.644-.869l.214-1.28Z" />
    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
</svg>
 Settings
    </a>
    <!--<button @click="$dispatch('open-mail-support')" class="inline-flex items-center gap-1.5 px-3 py-1.5 text-xs font-medium rounded-lg bg-surface-overlay text-content-secondary hover:bg-surface-border hover:text-content-primary transition-colors">-->
    <!--    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="m11.25 11.25.041-.02a.75.75 0 0 1 1.063.852l-.708 2.836a.75.75 0 0 0 1.063.853l.041-.021M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9-3.75h.008v.008H12V8.25Z" />
</svg>
 Support-->
    <!--</button>-->
</div>

    
    <div class="mb-6">
    <h2 class="text-xl font-bold text-content-primary">Investment Plans</h2>
            <p class="text-sm text-content-secondary mt-1">4 plans available</p>
    </div>

    
    <div class="flex items-center justify-end gap-3 mb-6">
        <a href="{{ url('/') }}/myplans/All" class="inline-flex items-center gap-1.5 px-4 py-2 rounded-lg bg-surface-overlay border border-surface-border text-content-secondary hover:text-content-primary text-sm font-medium transition-colors">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12.75V12A2.25 2.25 0 0 1 4.5 9.75h15A2.25 2.25 0 0 1 21.75 12v.75m-8.69-6.44-2.12-2.12a1.5 1.5 0 0 0-1.061-.44H4.5A2.25 2.25 0 0 0 2.25 6v12a2.25 2.25 0 0 0 2.25 2.25h15A2.25 2.25 0 0 0 21.75 18V9a2.25 2.25 0 0 0-2.25-2.25h-5.379a1.5 1.5 0 0 1-1.06-.44Z" />
</svg>
            My Plans
        </a>
    </div>

    
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                                <div class="rounded-xl bg-surface-raised border border-primary hover:border-primary overflow-hidden transition-all shadow-primary/5 shadow-lg"
                 x-data="{
                    amount: 1000,
                    min: 1000,
                    max: 4999,
                    rate: 0,
                    type: 'Percentage',
                    interval: 'Daily',
                    get roi() {
                        let amt = Math.max(this.min, Math.min(this.max, this.amount || this.min));
                        return this.type === 'Percentage' ? (amt * this.rate / 100).toFixed(2) : parseFloat(this.rate).toFixed(2);
                    },
                    get projected() {
                        let r = parseFloat(this.roi);
                        let multipliers = {'Monthly': 1, 'Weekly': 4.3, 'Daily': 30, 'Hourly': 720, 'Every 30 Minutes': 1440};
                        let m = multipliers[this.interval] || 30;
                        return (r * m).toFixed(2);
                    }
                 }">
                
                <div class="p-6 text-center border-b border-surface-border bg-primary/5">
                    <div class="inline-flex items-center justify-center w-12 h-12 rounded-full bg-primary/10 mb-3">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-primary" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="m3.75 13.5 10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75Z" />
</svg>
                    </div>
                    <h3 class="text-lg font-bold text-content-primary">Basic Plan</h3>
                                            <span class="inline-block mt-1 px-2.5 py-0.5 text-xs font-semibold rounded-full bg-primary/10 text-primary">Popular</span>
                                        <!--<div class="mt-3">-->
                    <!--    <span class="text-3xl font-bold text-primary">0%</span>-->
                    <!--    <span class="text-sm text-content-secondary ml-1">Daily</span>-->
                    <!--</div>-->
                </div>

                
                <div class="p-6 space-y-3">
                    <div class="flex items-center justify-between text-sm">
                        <span class="text-content-tertiary flex items-center gap-1.5">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 13.5 12 21m0 0-7.5-7.5M12 21V3" />
</svg>
 Minimum
                        </span>
                        <span class="text-content-primary font-semibold">$1,000.00</span>
                    </div>
                    <div class="flex items-center justify-between text-sm">
                        <span class="text-content-tertiary flex items-center gap-1.5">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 19.5 15-15m0 0H8.25m11.25 0v11.25" />
</svg>
 Maximum
                        </span>
                        <span class="text-content-primary font-semibold">$4,999.00</span>
                    </div>
                    <div class="flex items-center justify-between text-sm">
                        <span class="text-content-tertiary flex items-center gap-1.5">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
</svg>
 Duration
                        </span>
                        <span class="text-content-primary font-semibold">30 Days</span>
                    </div>
                                    </div>

                
                <div class="px-6 pb-4">
                    <div class="rounded-lg bg-surface-overlay border border-surface-border p-3">
                        <label class="block text-xs font-medium text-content-tertiary mb-1.5">Investment Amount</label>
                        <input type="number" x-model.number="amount"
                               :min="min" :max="max"
                               :placeholder="'$' + min + ' - $' + max"
                               class="w-full px-3 py-2 rounded-md bg-surface-base border border-surface-border text-content-primary text-sm placeholder-content-tertiary focus:outline-none focus:ring-1 focus:ring-primary focus:border-primary mb-2">
                        <!--<div class="flex items-center justify-between text-xs">-->
                        <!--    <span class="text-content-tertiary">Per Daily</span>-->
                        <!--    <span class="text-gain font-semibold" x-text="'$' + roi"></span>-->
                        <!--</div>-->
                        <!--<div class="flex items-center justify-between text-xs mt-1">-->
                        <!--    <span class="text-content-tertiary">Est. Monthly</span>-->
                        <!--    <span class="text-primary font-semibold" x-text="'$' + projected"></span>-->
                        <!--</div>-->
                    </div>
                </div>

                
                <div class="px-6 pb-6">
                    <button type="button"
                            onclick="openInvestDrawer(12)"
                            class="w-full py-2.5 rounded-lg bg-primary hover:bg-primary-dark text-content-inverse text-sm font-semibold transition-colors">
                        Invest Now
                    </button>
                </div>
            </div>
                                <div class="rounded-xl bg-surface-raised border border-surface-border hover:border-primary/50 overflow-hidden transition-all "
                 x-data="{
                    amount: 5000,
                    min: 5000,
                    max: 19999,
                    rate: 0,
                    type: 'Percentage',
                    interval: 'Daily',
                    get roi() {
                        let amt = Math.max(this.min, Math.min(this.max, this.amount || this.min));
                        return this.type === 'Percentage' ? (amt * this.rate / 100).toFixed(2) : parseFloat(this.rate).toFixed(2);
                    },
                    get projected() {
                        let r = parseFloat(this.roi);
                        let multipliers = {'Monthly': 1, 'Weekly': 4.3, 'Daily': 30, 'Hourly': 720, 'Every 30 Minutes': 1440};
                        let m = multipliers[this.interval] || 30;
                        return (r * m).toFixed(2);
                    }
                 }">
                
                <div class="p-6 text-center border-b border-surface-border ">
                    <div class="inline-flex items-center justify-center w-12 h-12 rounded-full bg-primary/10 mb-3">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-primary" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18.75a60.07 60.07 0 0 1 15.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 0 1 3 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 0 0-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 0 1-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 0 0 3 15h-.75M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm3 0h.008v.008H18V10.5Zm-12 0h.008v.008H6V10.5Z" />
</svg>
                    </div>
                    <h3 class="text-lg font-bold text-content-primary">Standard Plan</h3>
                                            <span class="inline-block mt-1 px-2.5 py-0.5 text-xs font-semibold rounded-full bg-info/10 text-info">regular</span>
                                        <!--<div class="mt-3">-->
                    <!--    <span class="text-3xl font-bold text-primary">0%</span>-->
                    <!--    <span class="text-sm text-content-secondary ml-1">Daily</span>-->
                    <!--</div>-->
                </div>

                
                <div class="p-6 space-y-3">
                    <div class="flex items-center justify-between text-sm">
                        <span class="text-content-tertiary flex items-center gap-1.5">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 13.5 12 21m0 0-7.5-7.5M12 21V3" />
</svg>
 Minimum
                        </span>
                        <span class="text-content-primary font-semibold">$5,000.00</span>
                    </div>
                    <div class="flex items-center justify-between text-sm">
                        <span class="text-content-tertiary flex items-center gap-1.5">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 19.5 15-15m0 0H8.25m11.25 0v11.25" />
</svg>
 Maximum
                        </span>
                        <span class="text-content-primary font-semibold">$19,999.00</span>
                    </div>
                    <div class="flex items-center justify-between text-sm">
                        <span class="text-content-tertiary flex items-center gap-1.5">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
</svg>
 Duration
                        </span>
                        <span class="text-content-primary font-semibold">30 Days</span>
                    </div>
                                    </div>

                
                <div class="px-6 pb-4">
                    <div class="rounded-lg bg-surface-overlay border border-surface-border p-3">
                        <label class="block text-xs font-medium text-content-tertiary mb-1.5">Investment Amount</label>
                        <input type="number" x-model.number="amount"
                               :min="min" :max="max"
                               :placeholder="'$' + min + ' - $' + max"
                               class="w-full px-3 py-2 rounded-md bg-surface-base border border-surface-border text-content-primary text-sm placeholder-content-tertiary focus:outline-none focus:ring-1 focus:ring-primary focus:border-primary mb-2">
                        <!--<div class="flex items-center justify-between text-xs">-->
                        <!--    <span class="text-content-tertiary">Per Daily</span>-->
                        <!--    <span class="text-gain font-semibold" x-text="'$' + roi"></span>-->
                        <!--</div>-->
                        <!--<div class="flex items-center justify-between text-xs mt-1">-->
                        <!--    <span class="text-content-tertiary">Est. Monthly</span>-->
                        <!--    <span class="text-primary font-semibold" x-text="'$' + projected"></span>-->
                        <!--</div>-->
                    </div>
                </div>

                
                <div class="px-6 pb-6">
                    <button type="button"
                            onclick="openInvestDrawer(13)"
                            class="w-full py-2.5 rounded-lg bg-primary hover:bg-primary-dark text-content-inverse text-sm font-semibold transition-colors">
                        Invest Now
                    </button>
                </div>
            </div>
                                <div class="rounded-xl bg-surface-raised border border-gain hover:border-gain overflow-hidden transition-all shadow-gain/5 shadow-lg"
                 x-data="{
                    amount: 10000,
                    min: 10000,
                    max: 49999,
                    rate: 0,
                    type: 'Percentage',
                    interval: 'Daily',
                    get roi() {
                        let amt = Math.max(this.min, Math.min(this.max, this.amount || this.min));
                        return this.type === 'Percentage' ? (amt * this.rate / 100).toFixed(2) : parseFloat(this.rate).toFixed(2);
                    },
                    get projected() {
                        let r = parseFloat(this.roi);
                        let multipliers = {'Monthly': 1, 'Weekly': 4.3, 'Daily': 30, 'Hourly': 720, 'Every 30 Minutes': 1440};
                        let m = multipliers[this.interval] || 30;
                        return (r * m).toFixed(2);
                    }
                 }">
                
                <div class="p-6 text-center border-b border-surface-border bg-gain/5">
                    <div class="inline-flex items-center justify-center w-12 h-12 rounded-full bg-primary/10 mb-3">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-primary" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M9.813 15.904 9 18.75l-.813-2.846a4.5 4.5 0 0 0-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 0 0 3.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 0 0 3.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 0 0-3.09 3.09ZM18.259 8.715 18 9.75l-.259-1.035a3.375 3.375 0 0 0-2.455-2.456L14.25 6l1.036-.259a3.375 3.375 0 0 0 2.455-2.456L18 2.25l.259 1.035a3.375 3.375 0 0 0 2.455 2.456L21.75 6l-1.036.259a3.375 3.375 0 0 0-2.455 2.456ZM16.894 20.567 16.5 21.75l-.394-1.183a2.25 2.25 0 0 0-1.423-1.423L13.5 18.75l1.183-.394a2.25 2.25 0 0 0 1.423-1.423l.394-1.183.394 1.183a2.25 2.25 0 0 0 1.423 1.423l1.183.394-1.183.394a2.25 2.25 0 0 0-1.423 1.423Z" />
</svg>
                    </div>
                    <h3 class="text-lg font-bold text-content-primary">Business Plan</h3>
                                            <span class="inline-block mt-1 px-2.5 py-0.5 text-xs font-semibold rounded-full bg-gain/10 text-gain">VIP</span>
                                        <!--<div class="mt-3">-->
                    <!--    <span class="text-3xl font-bold text-primary">0%</span>-->
                    <!--    <span class="text-sm text-content-secondary ml-1">Daily</span>-->
                    <!--</div>-->
                </div>

                
                <div class="p-6 space-y-3">
                    <div class="flex items-center justify-between text-sm">
                        <span class="text-content-tertiary flex items-center gap-1.5">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 13.5 12 21m0 0-7.5-7.5M12 21V3" />
</svg>
 Minimum
                        </span>
                        <span class="text-content-primary font-semibold">$10,000.00</span>
                    </div>
                    <div class="flex items-center justify-between text-sm">
                        <span class="text-content-tertiary flex items-center gap-1.5">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 19.5 15-15m0 0H8.25m11.25 0v11.25" />
</svg>
 Maximum
                        </span>
                        <span class="text-content-primary font-semibold">$49,999.00</span>
                    </div>
                    <div class="flex items-center justify-between text-sm">
                        <span class="text-content-tertiary flex items-center gap-1.5">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
</svg>
 Duration
                        </span>
                        <span class="text-content-primary font-semibold">30 Days</span>
                    </div>
                                    </div>

                
                <div class="px-6 pb-4">
                    <div class="rounded-lg bg-surface-overlay border border-surface-border p-3">
                        <label class="block text-xs font-medium text-content-tertiary mb-1.5">Investment Amount</label>
                        <input type="number" x-model.number="amount"
                               :min="min" :max="max"
                               :placeholder="'$' + min + ' - $' + max"
                               class="w-full px-3 py-2 rounded-md bg-surface-base border border-surface-border text-content-primary text-sm placeholder-content-tertiary focus:outline-none focus:ring-1 focus:ring-primary focus:border-primary mb-2">
                        <!--<div class="flex items-center justify-between text-xs">-->
                        <!--    <span class="text-content-tertiary">Per Daily</span>-->
                        <!--    <span class="text-gain font-semibold" x-text="'$' + roi"></span>-->
                        <!--</div>-->
                        <!--<div class="flex items-center justify-between text-xs mt-1">-->
                        <!--    <span class="text-content-tertiary">Est. Monthly</span>-->
                        <!--    <span class="text-primary font-semibold" x-text="'$' + projected"></span>-->
                        <!--</div>-->
                    </div>
                </div>

                
                <div class="px-6 pb-6">
                    <button type="button"
                            onclick="openInvestDrawer(14)"
                            class="w-full py-2.5 rounded-lg bg-primary hover:bg-primary-dark text-content-inverse text-sm font-semibold transition-colors">
                        Invest Now
                    </button>
                </div>
            </div>
                                <div class="rounded-xl bg-surface-raised border border-gain hover:border-gain overflow-hidden transition-all shadow-gain/5 shadow-lg"
                 x-data="{
                    amount: 50000,
                    min: 50000,
                    max: 500000,
                    rate: 0,
                    type: 'Percentage',
                    interval: 'Daily',
                    get roi() {
                        let amt = Math.max(this.min, Math.min(this.max, this.amount || this.min));
                        return this.type === 'Percentage' ? (amt * this.rate / 100).toFixed(2) : parseFloat(this.rate).toFixed(2);
                    },
                    get projected() {
                        let r = parseFloat(this.roi);
                        let multipliers = {'Monthly': 1, 'Weekly': 4.3, 'Daily': 30, 'Hourly': 720, 'Every 30 Minutes': 1440};
                        let m = multipliers[this.interval] || 30;
                        return (r * m).toFixed(2);
                    }
                 }">
                
                <div class="p-6 text-center border-b border-surface-border bg-gain/5">
                    <div class="inline-flex items-center justify-center w-12 h-12 rounded-full bg-primary/10 mb-3">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-primary" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M9.813 15.904 9 18.75l-.813-2.846a4.5 4.5 0 0 0-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 0 0 3.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 0 0 3.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 0 0-3.09 3.09ZM18.259 8.715 18 9.75l-.259-1.035a3.375 3.375 0 0 0-2.455-2.456L14.25 6l1.036-.259a3.375 3.375 0 0 0 2.455-2.456L18 2.25l.259 1.035a3.375 3.375 0 0 0 2.455 2.456L21.75 6l-1.036.259a3.375 3.375 0 0 0-2.455 2.456ZM16.894 20.567 16.5 21.75l-.394-1.183a2.25 2.25 0 0 0-1.423-1.423L13.5 18.75l1.183-.394a2.25 2.25 0 0 0 1.423-1.423l.394-1.183.394 1.183a2.25 2.25 0 0 0 1.423 1.423l1.183.394-1.183.394a2.25 2.25 0 0 0-1.423 1.423Z" />
</svg>
                    </div>
                    <h3 class="text-lg font-bold text-content-primary">Elite Plan</h3>
                                            <span class="inline-block mt-1 px-2.5 py-0.5 text-xs font-semibold rounded-full bg-gain/10 text-gain">VIP</span>
                                        <!--<div class="mt-3">-->
                    <!--    <span class="text-3xl font-bold text-primary">0%</span>-->
                    <!--    <span class="text-sm text-content-secondary ml-1">Daily</span>-->
                    <!--</div>-->
                </div>

                
                <div class="p-6 space-y-3">
                    <div class="flex items-center justify-between text-sm">
                        <span class="text-content-tertiary flex items-center gap-1.5">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 13.5 12 21m0 0-7.5-7.5M12 21V3" />
</svg>
 Minimum
                        </span>
                        <span class="text-content-primary font-semibold">$50,000.00</span>
                    </div>
                    <div class="flex items-center justify-between text-sm">
                        <span class="text-content-tertiary flex items-center gap-1.5">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 19.5 15-15m0 0H8.25m11.25 0v11.25" />
</svg>
 Maximum
                        </span>
                        <span class="text-content-primary font-semibold">$500,000.00</span>
                    </div>
                    <div class="flex items-center justify-between text-sm">
                        <span class="text-content-tertiary flex items-center gap-1.5">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
</svg>
 Duration
                        </span>
                        <span class="text-content-primary font-semibold">30 Days</span>
                    </div>
                                    </div>

                
                <div class="px-6 pb-4">
                    <div class="rounded-lg bg-surface-overlay border border-surface-border p-3">
                        <label class="block text-xs font-medium text-content-tertiary mb-1.5">Investment Amount</label>
                        <input type="number" x-model.number="amount"
                               :min="min" :max="max"
                               :placeholder="'$' + min + ' - $' + max"
                               class="w-full px-3 py-2 rounded-md bg-surface-base border border-surface-border text-content-primary text-sm placeholder-content-tertiary focus:outline-none focus:ring-1 focus:ring-primary focus:border-primary mb-2">
                        <!--<div class="flex items-center justify-between text-xs">-->
                        <!--    <span class="text-content-tertiary">Per Daily</span>-->
                        <!--    <span class="text-gain font-semibold" x-text="'$' + roi"></span>-->
                        <!--</div>-->
                        <!--<div class="flex items-center justify-between text-xs mt-1">-->
                        <!--    <span class="text-content-tertiary">Est. Monthly</span>-->
                        <!--    <span class="text-primary font-semibold" x-text="'$' + projected"></span>-->
                        <!--</div>-->
                    </div>
                </div>

                
                <div class="px-6 pb-6">
                    <button type="button"
                            onclick="openInvestDrawer(15)"
                            class="w-full py-2.5 rounded-lg bg-primary hover:bg-primary-dark text-content-inverse text-sm font-semibold transition-colors">
                        Invest Now
                    </button>
                </div>
            </div>
            </div>

    
    
    <div x-data="{ open: false }"
         x-on:open-invest-drawer.window="open = true"
         x-on:keydown.escape.window="open = false">
        
        <div x-show="open" x-cloak
             x-transition:enter="transition ease-out duration-300"
             x-transition:enter-start="opacity-0"
             x-transition:enter-end="opacity-100"
             x-transition:leave="transition ease-in duration-200"
             x-transition:leave-start="opacity-100"
             x-transition:leave-end="opacity-0"
             class="fixed inset-0 bg-black/60 z-40" @click="open = false"></div>
        
        <div x-show="open" x-cloak
             x-transition:enter="transition ease-out duration-300"
             x-transition:enter-start="translate-x-full"
             x-transition:enter-end="translate-x-0"
             x-transition:leave="transition ease-in duration-200"
             x-transition:leave-start="translate-x-0"
             x-transition:leave-end="translate-x-full"
             class="fixed inset-y-0 right-0 z-50 w-full max-w-2xl bg-surface-base border-l border-surface-border overflow-y-auto">
            
            <div class="sticky top-0 z-10 bg-surface-base border-b border-surface-border px-6 py-4 flex items-center justify-between">
                <h2 class="text-lg font-bold text-content-primary">Invest in Plan</h2>
                <button @click="open = false" class="p-2 rounded-lg hover:bg-surface-overlay text-content-tertiary hover:text-content-primary transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
</svg>
                </button>
            </div>
            
            <div class="px-6 pb-6">
                <div wire:id="lE47t7tuhlJukVg8INo8" wire:initial-data="{&quot;fingerprint&quot;:{&quot;id&quot;:&quot;lE47t7tuhlJukVg8INo8&quot;,&quot;name&quot;:&quot;user.investment-plan&quot;,&quot;locale&quot;:&quot;en&quot;,&quot;path&quot;:&quot;dashboard\/buy-plan&quot;,&quot;method&quot;:&quot;GET&quot;,&quot;v&quot;:&quot;acj&quot;},&quot;effects&quot;:{&quot;listeners&quot;:[&quot;selectPlanById&quot;]},&quot;serverMemo&quot;:{&quot;children&quot;:[],&quot;errors&quot;:[],&quot;htmlHash&quot;:&quot;d18a9bea&quot;,&quot;data&quot;:{&quot;planSelected&quot;:[],&quot;amountToInvest&quot;:0,&quot;disabled&quot;:&quot;disabled&quot;,&quot;paymentMethod&quot;:&quot;Account Balance&quot;,&quot;feedback&quot;:&quot;&quot;},&quot;dataMeta&quot;:{&quot;models&quot;:{&quot;planSelected&quot;:{&quot;class&quot;:&quot;App\\Models\\Plans&quot;,&quot;id&quot;:15,&quot;relations&quot;:[],&quot;connection&quot;:&quot;mysql&quot;}}},&quot;checksum&quot;:&quot;d865962d01abf75459a2d4a1ef1a38c7ca7a8db7a212038eba4115b316fb0b44&quot;}}">
            <div class="mt-6 grid grid-cols-1 lg:grid-cols-3 gap-6">
            
            <div class="lg:col-span-2 space-y-6">
                <div class="bg-surface-raised border border-surface-border rounded-xl p-6">
                    <div>
    </div>                    <div>
    </div>

                    
                    <div x-data="{ open: false }" class="relative mb-6">
                        <label class="block text-sm font-medium text-content-secondary mb-2">Select Investment Plan</label>
                        <button type="button" @click="open = !open"
                            class="w-full flex items-center justify-between bg-surface-overlay border border-surface-border rounded-lg px-4 py-3 text-left hover:border-primary/50 transition-colors">
                            <div class="flex items-center gap-3">
                                                                    <span class="text-primary">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 0 1 3 19.875v-6.75ZM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V8.625ZM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V4.125Z" />
</svg>
                                    </span>
                                    <span class="text-content-primary font-medium">Elite Plan</span>
                                                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-content-tertiary transition-transform" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
</svg>
                        </button>
                        <ul x-show="open" @click.outside="open = false"
                            x-transition:enter="transition ease-out duration-100"
                            x-transition:enter-start="opacity-0 scale-95"
                            x-transition:enter-end="opacity-100 scale-100"
                            x-transition:leave="transition ease-in duration-75"
                            x-transition:leave-start="opacity-100 scale-100"
                            x-transition:leave-end="opacity-0 scale-95"
                            class="absolute z-20 mt-2 w-full bg-surface-overlay border border-surface-border rounded-lg shadow-xl max-h-60 overflow-y-auto">
                                                            <li wire:click="selectPlan(15)" @click="open = false"
                                    class="flex items-center gap-3 px-4 py-3 cursor-pointer hover:bg-primary/10 transition-colors">
                                    <span class="text-primary">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 0 1 3 19.875v-6.75ZM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V8.625ZM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V4.125Z" />
</svg>
                                    </span>
                                    <span class="text-content-primary">Elite Plan</span>
                                </li>
                                                            <li wire:click="selectPlan(14)" @click="open = false"
                                    class="flex items-center gap-3 px-4 py-3 cursor-pointer hover:bg-primary/10 transition-colors">
                                    <span class="text-primary">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 0 1 3 19.875v-6.75ZM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V8.625ZM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V4.125Z" />
</svg>
                                    </span>
                                    <span class="text-content-primary">Business Plan</span>
                                </li>
                                                            <li wire:click="selectPlan(13)" @click="open = false"
                                    class="flex items-center gap-3 px-4 py-3 cursor-pointer hover:bg-primary/10 transition-colors">
                                    <span class="text-primary">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 0 1 3 19.875v-6.75ZM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V8.625ZM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V4.125Z" />
</svg>
                                    </span>
                                    <span class="text-content-primary">Standard Plan</span>
                                </li>
                                                            <li wire:click="selectPlan(12)" @click="open = false"
                                    class="flex items-center gap-3 px-4 py-3 cursor-pointer hover:bg-primary/10 transition-colors">
                                    <span class="text-primary">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 0 1 3 19.875v-6.75ZM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V8.625ZM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V4.125Z" />
</svg>
                                    </span>
                                    <span class="text-content-primary">Basic Plan</span>
                                </li>
                                                    </ul>
                    </div>

                    
                    <div class="mb-6">
                        <label class="block text-sm font-medium text-content-secondary mb-3">Choose Quick Amount to Invest</label>
                        <div class="flex flex-wrap gap-2">
                                                            <button wire:click="selectAmount('100')"
                                    class="px-4 py-2 bg-surface-overlay border border-surface-border rounded-lg text-sm text-content-primary hover:border-primary/50 hover:bg-primary/10 transition-all">
                                    $100.00                                </button>
                                                            <button wire:click="selectAmount('250')"
                                    class="px-4 py-2 bg-surface-overlay border border-surface-border rounded-lg text-sm text-content-primary hover:border-primary/50 hover:bg-primary/10 transition-all">
                                    $250.00                                </button>
                                                            <button wire:click="selectAmount('500')"
                                    class="px-4 py-2 bg-surface-overlay border border-surface-border rounded-lg text-sm text-content-primary hover:border-primary/50 hover:bg-primary/10 transition-all">
                                    $500.00                                </button>
                                                            <button wire:click="selectAmount('1000')"
                                    class="px-4 py-2 bg-surface-overlay border border-surface-border rounded-lg text-sm text-content-primary hover:border-primary/50 hover:bg-primary/10 transition-all">
                                    $1,000.00                                </button>
                                                            <button wire:click="selectAmount('1500')"
                                    class="px-4 py-2 bg-surface-overlay border border-surface-border rounded-lg text-sm text-content-primary hover:border-primary/50 hover:bg-primary/10 transition-all">
                                    $1,500.00                                </button>
                                                            <button wire:click="selectAmount('2000')"
                                    class="px-4 py-2 bg-surface-overlay border border-surface-border rounded-lg text-sm text-content-primary hover:border-primary/50 hover:bg-primary/10 transition-all">
                                    $2,000.00                                </button>
                                                    </div>
                    </div>

                    
                    <div class="mb-6">
                        <label class="block text-sm font-medium text-content-secondary mb-2">Or Enter Your Amount</label>
                        <input type="number" required wire:model="amountToInvest" wire:keyup="checkIfAmountIsEmpty"
                            placeholder="1000"
                            min="50000"
                            max="500000"
                            class="w-full bg-surface-overlay border border-surface-border rounded-lg px-4 py-3 text-content-primary placeholder-content-tertiary focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary transition-colors">
                    </div>

                    
                    <div>
                        <label class="block text-sm font-medium text-content-secondary mb-3">Choose Payment Method</label>
                        <button wire:click="chanegePaymentMethod('Account Balance')"
                            class="w-full flex items-center gap-4 p-4 rounded-lg border transition-all cursor-pointer
                                bg-primary/10 border-primary/50">
                            <div class="w-10 h-10 rounded-full bg-primary/10 flex items-center justify-center">
                                <span class="text-primary">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M21 12a2.25 2.25 0 0 0-2.25-2.25H15a3 3 0 1 1-6 0H5.25A2.25 2.25 0 0 0 3 12m18 0v6a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 18v-6m18 0V9M3 12V9m18 0a2.25 2.25 0 0 0-2.25-2.25H5.25A2.25 2.25 0 0 0 3 9m18 0V6a2.25 2.25 0 0 0-2.25-2.25H5.25A2.25 2.25 0 0 0 3 6v3" />
</svg>
                                </span>
                            </div>
                            <div class="text-left">
                                <p class="text-content-primary font-medium">Account Balance</p>
                                <p class="text-sm text-content-secondary">$0.00</p>
                            </div>
                                                            <div class="ml-auto">
                                    <span class="text-primary">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
</svg>
                                    </span>
                                </div>
                                                    </button>
                    </div>
                </div>
            </div>

            
            <div>
                <div class="bg-surface-raised border border-surface-border rounded-xl p-6 sticky top-24">
                    <h3 class="text-content-primary font-semibold mb-4">Your Investment Details</h3>

                    <div class="grid grid-cols-2 gap-4 mb-4">
                        <div>
                            <p class="text-xs text-content-tertiary mb-1">Name of Plan</p>
                            <p class="text-sm text-primary font-medium">Elite Plan</p>
                        </div>
                        <!--<div>-->
                        <!--    <p class="text-xs text-content-tertiary mb-1">Plan Price</p>-->
                        <!--    <p class="text-sm text-primary font-medium">$50,000.00</p>-->
                        <!--</div>-->
                        <div>
                            <p class="text-xs text-content-tertiary mb-1">Duration</p>
                            <p class="text-sm text-primary font-medium">30 Days</p>
                        </div>
                        <!--<div>-->
                        <!--    <p class="text-xs text-content-tertiary mb-1">Profit</p>-->
                        <!--    <p class="text-sm text-primary font-medium">-->
                        <!--        -->
                        <!--            -->
                        <!--                0%-->
                        <!--                Daily-->
                        <!--            -->
                        <!--        -->
                        <!--    </p>-->
                        <!--</div>-->
                        <div>
                            <p class="text-xs text-content-tertiary mb-1">Minimum Deposit</p>
                            <p class="text-sm text-primary font-medium">$50,000.00</p>
                        </div>
                        <div>
                            <p class="text-xs text-content-tertiary mb-1">Maximum Deposit</p>
                            <p class="text-sm text-primary font-medium">$500,000.00</p>
                        </div>
                        <!--<div>-->
                        <!--    <p class="text-xs text-content-tertiary mb-1">Minimum Return</p>-->
                        <!--    <p class="text-sm text-primary font-medium">0%</p>-->
                        <!--</div>-->
                        <!--<div>-->
                        <!--    <p class="text-xs text-content-tertiary mb-1">Maximum Return</p>-->
                        <!--    <p class="text-sm text-primary font-medium">0%</p>-->
                        <!--</div>-->
                        <!--<div class="col-span-2">-->
                        <!--    <p class="text-xs text-content-tertiary mb-1">Bonus</p>-->
                        <!--    <p class="text-sm text-primary font-medium">$0.00</p>-->
                        <!--</div>-->
                    </div>

                    <div class="border-t border-surface-border pt-4 mb-3">
                        <div class="flex items-center justify-between mb-2">
                            <span class="text-sm text-content-secondary">Payment method</span>
                            <span class="text-sm text-primary">Account Balance</span>
                        </div>
                    </div>

                    <div class="border-t border-surface-border pt-4 mb-6">
                        <div class="flex items-center justify-between">
                            <span class="text-content-primary font-semibold">Amount to Invest</span>
                            <span class="text-primary font-bold text-lg">$0.00</span>
                        </div>
                    </div>

                    <form wire:submit.prevent="joinPlan">
                        <button type="submit" disabled
                            class="w-full bg-primary hover:bg-primary-dark disabled:opacity-50 disabled:cursor-not-allowed text-content-inverse font-semibold py-3 px-4 rounded-lg transition-colors">
                            Confirm & Invest
                        </button>
                    </form>
                    <p class="text-center mt-3 text-sm text-primary" wire:loading wire:target="joinPlan">
                        Processing...
                    </p>
                </div>
            </div>
        </div>
    </div>

<!-- Livewire Component wire-end:lE47t7tuhlJukVg8INo8 -->            </div>
        </div>
    </div>

        </div>

        
        <footer class="border-t border-surface-border py-6 px-6 mt-8">
            <p class="text-sm text-content-tertiary text-center">
                &copy; Finvora Digital.
            </p>
        </footer>
    </main>

    
    
    
    <div x-data="{ open: false }"
         @open-other-deposit.window="open = true"
         x-show="open" x-cloak
         class="fixed inset-0 z-[60] flex items-center justify-center p-4">
        <div x-show="open" x-transition.opacity class="absolute inset-0 bg-black/60" @click="open = false"></div>
        <div x-show="open" x-transition class="relative w-full max-w-md bg-surface-raised border border-surface-border rounded-2xl shadow-2xl overflow-hidden">
            <div class="p-6">
                <div class="flex items-center justify-between mb-4">
                    <h3 class="text-lg font-semibold text-content-primary">Other Deposit Method</h3>
                    <button @click="open = false" class="text-content-tertiary hover:text-content-primary"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
</svg>
</button>
                </div>
                <form method="POST" action="{{ url('/') }}/otherpayment" class="space-y-4">
                    <input type="hidden" name="_token" value="rLwI7Fc9ZrLyHHXojFzEp8fc5cBgLpDmBdQGabCG">                    <div>
                        <label class="text-xs text-content-tertiary font-medium mb-1 block">Full Name</label>
                        <input type="text" name="name" value="egod" readonly
                               class="w-full bg-surface-overlay border border-surface-border rounded-lg px-3 py-2.5 text-sm text-content-primary focus:outline-none">
                    </div>
                    <div>
                        <label class="text-xs text-content-tertiary font-medium mb-1 block">Email</label>
                        <input type="email" name="email" value="egod1422@gmail.com" readonly
                               class="w-full bg-surface-overlay border border-surface-border rounded-lg px-3 py-2.5 text-sm text-content-primary focus:outline-none">
                    </div>
                    <div>
                        <label class="text-xs text-content-tertiary font-medium mb-1 block">Deposit Type</label>
                        <select name="mode" required
                                class="w-full bg-surface-overlay border border-surface-border rounded-lg px-3 py-2.5 text-sm text-content-primary focus:outline-none focus:ring-2 focus:ring-primary">
                            <option value="" disabled selected>Select method</option>
                            <option value="Litecoin">Litecoin</option>
                            <option value="BANK TRANSFER">Bank Transfer</option>
                            <option value="BITCOIN CASH">Bitcoin Cash</option>
                            <option value="USDT">USDT</option>
                            <option value="PAYPAL">PayPal</option>
                            <option value="WESTERN UNION">Western Union</option>
                            <option value="SKRILL">Skrill</option>
                        </select>
                    </div>
                    <div>
                        <label class="text-xs text-content-tertiary font-medium mb-1 block">Amount</label>
                        <input type="number" step="0.01" name="amount" required placeholder="0.00"
                               class="w-full bg-surface-overlay border border-surface-border rounded-lg px-3 py-2.5 text-sm text-content-primary placeholder-content-tertiary focus:outline-none focus:ring-2 focus:ring-primary">
                    </div>
                    <div class="flex gap-3">
                        <button type="button" @click="open = false" class="flex-1 bg-surface-overlay text-content-secondary hover:bg-surface-border rounded-lg py-2.5 text-sm font-medium transition-colors">Cancel</button>
                        <button type="submit" name="request_deposit" class="flex-1 bg-primary hover:bg-primary-dark text-content-inverse rounded-lg py-2.5 text-sm font-medium transition-colors">Request</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    
    <div x-data="{ open: false }"
         @open-mail-support.window="open = true"
         x-show="open" x-cloak
         class="fixed inset-0 z-[60] flex items-center justify-center p-4">
        <div x-show="open" x-transition.opacity class="absolute inset-0 bg-black/60" @click="open = false"></div>
        <div x-show="open" x-transition class="relative w-full max-w-lg bg-surface-raised border border-surface-border rounded-2xl shadow-2xl overflow-hidden">
            <div class="p-6">
                <div class="flex items-center justify-between mb-4">
                    <h3 class="text-lg font-semibold text-content-primary">Contact Support</h3>
                    <button @click="open = false" class="text-content-tertiary hover:text-content-primary"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
</svg>
</button>
                </div>
                <form method="POST" action="{{ url('/') }}/sendcontact" class="space-y-4">
                    <input type="hidden" name="_token" value="rLwI7Fc9ZrLyHHXojFzEp8fc5cBgLpDmBdQGabCG">                    <input type="hidden" name="to_email" value="Finvora Digital Support">
                    <input type="hidden" name="email" value="egod1422@gmail.com">
                    <input type="hidden" name="name" value="egod">
                    <div>
                        <label class="text-xs text-content-tertiary font-medium mb-1 block">Subject</label>
                        <input type="text" name="subject" required placeholder="How can we help?"
                               class="w-full bg-surface-overlay border border-surface-border rounded-lg px-3 py-2.5 text-sm text-content-primary placeholder-content-tertiary focus:outline-none focus:ring-2 focus:ring-primary">
                    </div>
                    <div>
                        <label class="text-xs text-content-tertiary font-medium mb-1 block">Message</label>
                        <textarea name="message" rows="5" required placeholder="Describe your issue..."
                                  class="w-full bg-surface-overlay border border-surface-border rounded-lg px-3 py-2.5 text-sm text-content-primary placeholder-content-tertiary focus:outline-none focus:ring-2 focus:ring-primary resize-none"></textarea>
                    </div>
                    <div class="flex gap-3">
                        <button type="button" @click="open = false" class="flex-1 bg-surface-overlay text-content-secondary hover:bg-surface-border rounded-lg py-2.5 text-sm font-medium transition-colors">Cancel</button>
                        <button type="submit" name="contact" class="flex-1 bg-primary hover:bg-primary-dark text-content-inverse rounded-lg py-2.5 text-sm font-medium transition-colors">Send Message</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="/livewire/livewire.js?id=90730a3b0e7144480175" data-turbo-eval="false" data-turbolinks-eval="false" ></script><script data-turbo-eval="false" data-turbolinks-eval="false" >window.livewire = new Livewire();window.Livewire = window.livewire;window.livewire_app_url = '';window.livewire_token = 'rLwI7Fc9ZrLyHHXojFzEp8fc5cBgLpDmBdQGabCG';window.deferLoadingAlpine = function (callback) {window.addEventListener('livewire:load', function () {callback();});};let started = false;window.addEventListener('alpine:initializing', function () {if (! started) {window.livewire.start();started = true;}});document.addEventListener("DOMContentLoaded", function () {if (! started) {window.livewire.start();started = true;}});</script>
    <script>
    function openInvestDrawer(planId) {
        Livewire.emit('selectPlanById', planId);
        window.dispatchEvent(new CustomEvent('open-invest-drawer'));
    }
</script>
    <!-- Smartsupp Live Chat script -->
<script type="text/javascript">
var _smartsupp = _smartsupp || {};
_smartsupp.key = 'cea0c4157167758bfc5f7d866252089e7915ca1f';
window.smartsupp||(function(d) {
  var s,c,o=smartsupp=function(){ o._.push(arguments)};o._=[];
  s=d.getElementsByTagName('script')[0];c=d.createElement('script');
  c.type='text/javascript';c.charset='utf-8';c.async=true;
  c.src='https://www.smartsuppchat.com/loader.js?';s.parentNode.insertBefore(c,s);
})(document);
</script>
<noscript>Powered by <a href="https://www.smartsupp.com" target="_blank">Smartsupp</a></noscript>








</body>
</html>

