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
    <div>
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
        bg-surface-overlay text-content-secondary hover:bg-surface-border hover:text-content-primary">
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
        bg-primary text-content-inverse">
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
    <h2 class="text-xl font-bold text-content-primary">Markets</h2>
            <p class="text-sm text-content-secondary mt-1">Browse and trade available assets</p>
    </div>

    
    
    <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 mb-6">
        <div class="bg-surface-raised border border-surface-border rounded-xl p-3 hover:border-surface-border-light transition-colors flex items-center gap-3">
    <div class="p-2 rounded-lg bg-primary-subtle shrink-0">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 text-primary" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M12 21v-8.25M15.75 21v-8.25M8.25 21v-8.25M3 9l9-6 9 6m-1.5 12V10.332A48.36 48.36 0 0 0 12 9.75c-2.551 0-5.056.2-7.5.582V21M3 21h18M12 6.75h.008v.008H12V6.75Z" />
</svg>
    </div>
    <div class="min-w-0">
        <p class="text-xs text-content-tertiary font-medium uppercase tracking-wide truncate">Total Assets</p>
        <p class="text-lg font-bold text-content-primary">125</p>
            </div>
</div>
        <div class="bg-surface-raised border border-surface-border rounded-xl p-3 hover:border-surface-border-light transition-colors flex items-center gap-3">
    <div class="p-2 rounded-lg bg-gain/10 shrink-0">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 text-gain" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
</svg>
    </div>
    <div class="min-w-0">
        <p class="text-xs text-content-tertiary font-medium uppercase tracking-wide truncate">Top Gainer</p>
        <p class="text-lg font-bold text-content-primary">NEX</p>
                    <p class="text-xs font-medium text-gain">+27.97%</p>
            </div>
</div>
        <div class="bg-surface-raised border border-surface-border rounded-xl p-3 hover:border-surface-border-light transition-colors flex items-center gap-3">
    <div class="p-2 rounded-lg bg-loss/10 shrink-0">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 text-loss" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6 9 12.75l6.75-6.75M2.25 12.75 9 19.5l6.75-6.75" />
</svg>
    </div>
    <div class="min-w-0">
        <p class="text-xs text-content-tertiary font-medium uppercase tracking-wide truncate">Top Loser</p>
        <p class="text-lg font-bold text-content-primary">MATIC</p>
            </div>
</div>
        <div class="bg-surface-raised border border-surface-border rounded-xl p-3 hover:border-surface-border-light transition-colors flex items-center gap-3">
    <div class="p-2 rounded-lg bg-primary-subtle shrink-0">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 text-primary" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 0 1 3 19.875v-6.75ZM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V8.625ZM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V4.125Z" />
</svg>
    </div>
    <div class="min-w-0">
        <p class="text-xs text-content-tertiary font-medium uppercase tracking-wide truncate">Active Markets</p>
        <p class="text-lg font-bold text-content-primary">5</p>
            </div>
</div>
    </div>

    
    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 mb-6">
        
        <div class="flex flex-wrap items-center gap-2" role="tablist" aria-label="Filter by asset class">
                                            <a href="{{ route('user.markets') }}"
                   class="inline-flex items-center gap-1.5 px-3 py-1.5 text-sm font-medium rounded-lg transition-colors bg-primary text-content-inverse"
                   role="tab"
                   aria-selected="true">
                    All
                    <span class="px-1.5 py-0.5 text-[10px] font-bold rounded bg-white/20 text-white">125</span>
                </a>
                                            <a href="{{ route('user.markets') }}?class=crypto"
                   class="inline-flex items-center gap-1.5 px-3 py-1.5 text-sm font-medium rounded-lg transition-colors bg-surface-overlay text-content-secondary hover:text-content-primary hover:bg-surface-overlay/80"
                   role="tab"
                   aria-selected="false">
                    Crypto
                    <span class="px-1.5 py-0.5 text-[10px] font-bold rounded bg-surface-base text-content-tertiary">81</span>
                </a>
                                            <a href="{{ route('user.markets') }}?class=forex"
                   class="inline-flex items-center gap-1.5 px-3 py-1.5 text-sm font-medium rounded-lg transition-colors bg-surface-overlay text-content-secondary hover:text-content-primary hover:bg-surface-overlay/80"
                   role="tab"
                   aria-selected="false">
                    Forex
                    <span class="px-1.5 py-0.5 text-[10px] font-bold rounded bg-surface-base text-content-tertiary">12</span>
                </a>
                                            <a href="{{ route('user.markets') }}?class=stock"
                   class="inline-flex items-center gap-1.5 px-3 py-1.5 text-sm font-medium rounded-lg transition-colors bg-surface-overlay text-content-secondary hover:text-content-primary hover:bg-surface-overlay/80"
                   role="tab"
                   aria-selected="false">
                    Stocks
                    <span class="px-1.5 py-0.5 text-[10px] font-bold rounded bg-surface-base text-content-tertiary">14</span>
                </a>
                                            <a href="{{ route('user.markets') }}?class=etf"
                   class="inline-flex items-center gap-1.5 px-3 py-1.5 text-sm font-medium rounded-lg transition-colors bg-surface-overlay text-content-secondary hover:text-content-primary hover:bg-surface-overlay/80"
                   role="tab"
                   aria-selected="false">
                    ETFs
                    <span class="px-1.5 py-0.5 text-[10px] font-bold rounded bg-surface-base text-content-tertiary">10</span>
                </a>
                                            <a href="{{ route('user.markets') }}?class=index"
                   class="inline-flex items-center gap-1.5 px-3 py-1.5 text-sm font-medium rounded-lg transition-colors bg-surface-overlay text-content-secondary hover:text-content-primary hover:bg-surface-overlay/80"
                   role="tab"
                   aria-selected="false">
                    Indices
                    <span class="px-1.5 py-0.5 text-[10px] font-bold rounded bg-surface-base text-content-tertiary">8</span>
                </a>
                    </div>

        
        <form method="GET" action="{{ route('user.markets') }}" class="relative flex-shrink-0">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 text-content-tertiary absolute left-3 top-1/2 -translate-y-1/2 pointer-events-none" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
</svg>
            <input type="text"
                   name="search"
                   value=""
                   placeholder="Search by name or symbol..."
                   class="w-full sm:w-64 pl-9 pr-4 py-2 text-sm bg-surface-overlay border border-surface-border rounded-lg text-content-primary placeholder-content-tertiary focus:ring-2 focus:ring-primary focus:border-transparent focus:outline-none"
                   aria-label="Search assets">
        </form>
    </div>

    
            
        <div class="hidden md:block bg-surface-raised border border-surface-border rounded-xl overflow-hidden mb-6">
            <table class="w-full text-sm" role="table">
                <caption class="sr-only">Available trading assets with prices and market data</caption>
                <thead>
                    <tr class="border-b border-surface-border">
                        <th scope="col" class="px-4 py-3 text-left text-xs font-medium text-content-tertiary uppercase tracking-wider">Asset</th>
                        <th scope="col" class="px-4 py-3 text-right text-xs font-medium text-content-tertiary uppercase tracking-wider">Price</th>
                        <th scope="col" class="px-4 py-3 text-right text-xs font-medium text-content-tertiary uppercase tracking-wider">24h Change</th>
                        <th scope="col" class="px-4 py-3 text-left text-xs font-medium text-content-tertiary uppercase tracking-wider">Class</th>
                        <th scope="col" class="px-4 py-3 text-right text-xs font-medium text-content-tertiary uppercase tracking-wider"><span class="sr-only">Actions</span></th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-surface-border">
                                            <tr class="hover:bg-surface-overlay/50 transition-colors group">
                            
                            <td class="px-4 py-3">
                                <div class="flex items-center gap-3">
                                                                            <img src="https://coin-images.coingecko.com/coins/images/1/large/bitcoin.png?1696501400" alt="" class="w-8 h-8 rounded-full bg-surface-overlay" loading="lazy">
                                                                        <div>
                                        <span class="text-sm font-semibold text-content-primary">Bitcoin</span>
                                                                                    <span class="text-xs text-content-tertiary ml-1">BTC</span>
                                                                            </div>
                                </div>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <span class="text-sm font-medium text-content-primary">
                                    $63,560.00
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                                                    <span class="inline-flex items-center gap-1 text-xs font-semibold text-loss">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6 9 12.75l6.75-6.75M2.25 12.75 9 19.5l6.75-6.75" />
</svg>
                                        -0.80%
                                    </span>
                                                            </td>
                            
                            <td class="px-4 py-3">
                                <span class="px-2 py-0.5 text-[10px] font-medium rounded-full bg-surface-overlay text-content-secondary capitalize">
                                    crypto
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <a href="{{ route('user.trade') }}?asset=1"
                                   class="inline-flex items-center gap-1 px-3 py-1.5 text-xs font-medium rounded-lg bg-primary hover:bg-primary-dark text-content-inverse transition-colors opacity-0 group-hover:opacity-100 focus:opacity-100">
                                    Trade
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
</svg>
                                </a>
                            </td>
                        </tr>
                                            <tr class="hover:bg-surface-overlay/50 transition-colors group">
                            
                            <td class="px-4 py-3">
                                <div class="flex items-center gap-3">
                                                                            <img src="https://coin-images.coingecko.com/coins/images/279/large/ethereum.png?1696501628" alt="" class="w-8 h-8 rounded-full bg-surface-overlay" loading="lazy">
                                                                        <div>
                                        <span class="text-sm font-semibold text-content-primary">Ethereum</span>
                                                                                    <span class="text-xs text-content-tertiary ml-1">ETH</span>
                                                                            </div>
                                </div>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <span class="text-sm font-medium text-content-primary">
                                    $1,897.60
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                                                    <span class="inline-flex items-center gap-1 text-xs font-semibold text-gain">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
</svg>
                                        +0.00%
                                    </span>
                                                            </td>
                            
                            <td class="px-4 py-3">
                                <span class="px-2 py-0.5 text-[10px] font-medium rounded-full bg-surface-overlay text-content-secondary capitalize">
                                    crypto
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <a href="{{ route('user.trade') }}?asset=2"
                                   class="inline-flex items-center gap-1 px-3 py-1.5 text-xs font-medium rounded-lg bg-primary hover:bg-primary-dark text-content-inverse transition-colors opacity-0 group-hover:opacity-100 focus:opacity-100">
                                    Trade
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
</svg>
                                </a>
                            </td>
                        </tr>
                                            <tr class="hover:bg-surface-overlay/50 transition-colors group">
                            
                            <td class="px-4 py-3">
                                <div class="flex items-center gap-3">
                                                                            <img src="https://coin-images.coingecko.com/coins/images/325/large/Tether.png?1696501661" alt="" class="w-8 h-8 rounded-full bg-surface-overlay" loading="lazy">
                                                                        <div>
                                        <span class="text-sm font-semibold text-content-primary">Tether</span>
                                                                                    <span class="text-xs text-content-tertiary ml-1">USDT</span>
                                                                            </div>
                                </div>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <span class="text-sm font-medium text-content-primary">
                                    $1.00
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                                                    <span class="inline-flex items-center gap-1 text-xs font-semibold text-gain">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
</svg>
                                        +0.00%
                                    </span>
                                                            </td>
                            
                            <td class="px-4 py-3">
                                <span class="px-2 py-0.5 text-[10px] font-medium rounded-full bg-surface-overlay text-content-secondary capitalize">
                                    crypto
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <a href="{{ route('user.trade') }}?asset=3"
                                   class="inline-flex items-center gap-1 px-3 py-1.5 text-xs font-medium rounded-lg bg-primary hover:bg-primary-dark text-content-inverse transition-colors opacity-0 group-hover:opacity-100 focus:opacity-100">
                                    Trade
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
</svg>
                                </a>
                            </td>
                        </tr>
                                            <tr class="hover:bg-surface-overlay/50 transition-colors group">
                            
                            <td class="px-4 py-3">
                                <div class="flex items-center gap-3">
                                                                            <img src="https://coin-images.coingecko.com/coins/images/825/large/bnb-icon2_2x.png?1696501970" alt="" class="w-8 h-8 rounded-full bg-surface-overlay" loading="lazy">
                                                                        <div>
                                        <span class="text-sm font-semibold text-content-primary">BNB</span>
                                                                                    <span class="text-xs text-content-tertiary ml-1">BNB</span>
                                                                            </div>
                                </div>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <span class="text-sm font-medium text-content-primary">
                                    $567.54
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                                                    <span class="inline-flex items-center gap-1 text-xs font-semibold text-gain">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
</svg>
                                        +0.70%
                                    </span>
                                                            </td>
                            
                            <td class="px-4 py-3">
                                <span class="px-2 py-0.5 text-[10px] font-medium rounded-full bg-surface-overlay text-content-secondary capitalize">
                                    crypto
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <a href="{{ route('user.trade') }}?asset=4"
                                   class="inline-flex items-center gap-1 px-3 py-1.5 text-xs font-medium rounded-lg bg-primary hover:bg-primary-dark text-content-inverse transition-colors opacity-0 group-hover:opacity-100 focus:opacity-100">
                                    Trade
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
</svg>
                                </a>
                            </td>
                        </tr>
                                            <tr class="hover:bg-surface-overlay/50 transition-colors group">
                            
                            <td class="px-4 py-3">
                                <div class="flex items-center gap-3">
                                                                            <img src="https://coin-images.coingecko.com/coins/images/6319/large/USDC.png?1769615602" alt="" class="w-8 h-8 rounded-full bg-surface-overlay" loading="lazy">
                                                                        <div>
                                        <span class="text-sm font-semibold text-content-primary">USDC</span>
                                                                                    <span class="text-xs text-content-tertiary ml-1">USDC</span>
                                                                            </div>
                                </div>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <span class="text-sm font-medium text-content-primary">
                                    $1.00
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                                                    <span class="inline-flex items-center gap-1 text-xs font-semibold text-gain">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
</svg>
                                        +0.00%
                                    </span>
                                                            </td>
                            
                            <td class="px-4 py-3">
                                <span class="px-2 py-0.5 text-[10px] font-medium rounded-full bg-surface-overlay text-content-secondary capitalize">
                                    crypto
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <a href="{{ route('user.trade') }}?asset=7"
                                   class="inline-flex items-center gap-1 px-3 py-1.5 text-xs font-medium rounded-lg bg-primary hover:bg-primary-dark text-content-inverse transition-colors opacity-0 group-hover:opacity-100 focus:opacity-100">
                                    Trade
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
</svg>
                                </a>
                            </td>
                        </tr>
                                            <tr class="hover:bg-surface-overlay/50 transition-colors group">
                            
                            <td class="px-4 py-3">
                                <div class="flex items-center gap-3">
                                                                            <img src="https://coin-images.coingecko.com/coins/images/44/large/xrp-symbol-white-128.png?1696501442" alt="" class="w-8 h-8 rounded-full bg-surface-overlay" loading="lazy">
                                                                        <div>
                                        <span class="text-sm font-semibold text-content-primary">XRP</span>
                                                                                    <span class="text-xs text-content-tertiary ml-1">XRP</span>
                                                                            </div>
                                </div>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <span class="text-sm font-medium text-content-primary">
                                    $1.06
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                                                    <span class="inline-flex items-center gap-1 text-xs font-semibold text-loss">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6 9 12.75l6.75-6.75M2.25 12.75 9 19.5l6.75-6.75" />
</svg>
                                        -1.90%
                                    </span>
                                                            </td>
                            
                            <td class="px-4 py-3">
                                <span class="px-2 py-0.5 text-[10px] font-medium rounded-full bg-surface-overlay text-content-secondary capitalize">
                                    crypto
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <a href="{{ route('user.trade') }}?asset=6"
                                   class="inline-flex items-center gap-1 px-3 py-1.5 text-xs font-medium rounded-lg bg-primary hover:bg-primary-dark text-content-inverse transition-colors opacity-0 group-hover:opacity-100 focus:opacity-100">
                                    Trade
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
</svg>
                                </a>
                            </td>
                        </tr>
                                            <tr class="hover:bg-surface-overlay/50 transition-colors group">
                            
                            <td class="px-4 py-3">
                                <div class="flex items-center gap-3">
                                                                            <img src="https://coin-images.coingecko.com/coins/images/4128/large/solana.png?1718769756" alt="" class="w-8 h-8 rounded-full bg-surface-overlay" loading="lazy">
                                                                        <div>
                                        <span class="text-sm font-semibold text-content-primary">Solana</span>
                                                                                    <span class="text-xs text-content-tertiary ml-1">SOL</span>
                                                                            </div>
                                </div>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <span class="text-sm font-medium text-content-primary">
                                    $73.67
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                                                    <span class="inline-flex items-center gap-1 text-xs font-semibold text-loss">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6 9 12.75l6.75-6.75M2.25 12.75 9 19.5l6.75-6.75" />
</svg>
                                        -1.00%
                                    </span>
                                                            </td>
                            
                            <td class="px-4 py-3">
                                <span class="px-2 py-0.5 text-[10px] font-medium rounded-full bg-surface-overlay text-content-secondary capitalize">
                                    crypto
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <a href="{{ route('user.trade') }}?asset=5"
                                   class="inline-flex items-center gap-1 px-3 py-1.5 text-xs font-medium rounded-lg bg-primary hover:bg-primary-dark text-content-inverse transition-colors opacity-0 group-hover:opacity-100 focus:opacity-100">
                                    Trade
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
</svg>
                                </a>
                            </td>
                        </tr>
                                            <tr class="hover:bg-surface-overlay/50 transition-colors group">
                            
                            <td class="px-4 py-3">
                                <div class="flex items-center gap-3">
                                                                            <img src="https://coin-images.coingecko.com/coins/images/1094/large/photo_2026-04-13_09-59-16.png?1776048311" alt="" class="w-8 h-8 rounded-full bg-surface-overlay" loading="lazy">
                                                                        <div>
                                        <span class="text-sm font-semibold text-content-primary">TRON</span>
                                                                                    <span class="text-xs text-content-tertiary ml-1">TRX</span>
                                                                            </div>
                                </div>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <span class="text-sm font-medium text-content-primary">
                                    $0.32
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                                                    <span class="inline-flex items-center gap-1 text-xs font-semibold text-loss">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6 9 12.75l6.75-6.75M2.25 12.75 9 19.5l6.75-6.75" />
</svg>
                                        -1.30%
                                    </span>
                                                            </td>
                            
                            <td class="px-4 py-3">
                                <span class="px-2 py-0.5 text-[10px] font-medium rounded-full bg-surface-overlay text-content-secondary capitalize">
                                    crypto
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <a href="{{ route('user.trade') }}?asset=10"
                                   class="inline-flex items-center gap-1 px-3 py-1.5 text-xs font-medium rounded-lg bg-primary hover:bg-primary-dark text-content-inverse transition-colors opacity-0 group-hover:opacity-100 focus:opacity-100">
                                    Trade
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
</svg>
                                </a>
                            </td>
                        </tr>
                                            <tr class="hover:bg-surface-overlay/50 transition-colors group">
                            
                            <td class="px-4 py-3">
                                <div class="flex items-center gap-3">
                                                                            <img src="https://coin-images.coingecko.com/coins/images/68480/large/figure.png?1755863954" alt="" class="w-8 h-8 rounded-full bg-surface-overlay" loading="lazy">
                                                                        <div>
                                        <span class="text-sm font-semibold text-content-primary">Figure Heloc</span>
                                                                                    <span class="text-xs text-content-tertiary ml-1">FIGR_HELOC</span>
                                                                            </div>
                                </div>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <span class="text-sm font-medium text-content-primary">
                                    $1.03
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                                                    <span class="inline-flex items-center gap-1 text-xs font-semibold text-gain">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
</svg>
                                        +2.50%
                                    </span>
                                                            </td>
                            
                            <td class="px-4 py-3">
                                <span class="px-2 py-0.5 text-[10px] font-medium rounded-full bg-surface-overlay text-content-secondary capitalize">
                                    crypto
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <a href="{{ route('user.trade') }}?asset=60"
                                   class="inline-flex items-center gap-1 px-3 py-1.5 text-xs font-medium rounded-lg bg-primary hover:bg-primary-dark text-content-inverse transition-colors opacity-0 group-hover:opacity-100 focus:opacity-100">
                                    Trade
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
</svg>
                                </a>
                            </td>
                        </tr>
                                            <tr class="hover:bg-surface-overlay/50 transition-colors group">
                            
                            <td class="px-4 py-3">
                                <div class="flex items-center gap-3">
                                                                            <img src="https://coin-images.coingecko.com/coins/images/27045/large/wbt_token.png?1696526096" alt="" class="w-8 h-8 rounded-full bg-surface-overlay" loading="lazy">
                                                                        <div>
                                        <span class="text-sm font-semibold text-content-primary">WhiteBIT Coin</span>
                                                                                    <span class="text-xs text-content-tertiary ml-1">WBT</span>
                                                                            </div>
                                </div>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <span class="text-sm font-medium text-content-primary">
                                    $55.72
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                                                    <span class="inline-flex items-center gap-1 text-xs font-semibold text-loss">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6 9 12.75l6.75-6.75M2.25 12.75 9 19.5l6.75-6.75" />
</svg>
                                        -0.70%
                                    </span>
                                                            </td>
                            
                            <td class="px-4 py-3">
                                <span class="px-2 py-0.5 text-[10px] font-medium rounded-full bg-surface-overlay text-content-secondary capitalize">
                                    crypto
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <a href="{{ route('user.trade') }}?asset=61"
                                   class="inline-flex items-center gap-1 px-3 py-1.5 text-xs font-medium rounded-lg bg-primary hover:bg-primary-dark text-content-inverse transition-colors opacity-0 group-hover:opacity-100 focus:opacity-100">
                                    Trade
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
</svg>
                                </a>
                            </td>
                        </tr>
                                            <tr class="hover:bg-surface-overlay/50 transition-colors group">
                            
                            <td class="px-4 py-3">
                                <div class="flex items-center gap-3">
                                                                            <img src="https://coin-images.coingecko.com/coins/images/50882/large/hyperliquid.jpg?1729431300" alt="" class="w-8 h-8 rounded-full bg-surface-overlay" loading="lazy">
                                                                        <div>
                                        <span class="text-sm font-semibold text-content-primary">Hyperliquid</span>
                                                                                    <span class="text-xs text-content-tertiary ml-1">HYPE</span>
                                                                            </div>
                                </div>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <span class="text-sm font-medium text-content-primary">
                                    $55.23
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                                                    <span class="inline-flex items-center gap-1 text-xs font-semibold text-loss">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6 9 12.75l6.75-6.75M2.25 12.75 9 19.5l6.75-6.75" />
</svg>
                                        -2.80%
                                    </span>
                                                            </td>
                            
                            <td class="px-4 py-3">
                                <span class="px-2 py-0.5 text-[10px] font-medium rounded-full bg-surface-overlay text-content-secondary capitalize">
                                    crypto
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <a href="{{ route('user.trade') }}?asset=64"
                                   class="inline-flex items-center gap-1 px-3 py-1.5 text-xs font-medium rounded-lg bg-primary hover:bg-primary-dark text-content-inverse transition-colors opacity-0 group-hover:opacity-100 focus:opacity-100">
                                    Trade
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
</svg>
                                </a>
                            </td>
                        </tr>
                                            <tr class="hover:bg-surface-overlay/50 transition-colors group">
                            
                            <td class="px-4 py-3">
                                <div class="flex items-center gap-3">
                                                                            <img src="https://coin-images.coingecko.com/coins/images/5/large/dogecoin.png?1696501409" alt="" class="w-8 h-8 rounded-full bg-surface-overlay" loading="lazy">
                                                                        <div>
                                        <span class="text-sm font-semibold text-content-primary">Dogecoin</span>
                                                                                    <span class="text-xs text-content-tertiary ml-1">DOGE</span>
                                                                            </div>
                                </div>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <span class="text-sm font-medium text-content-primary">
                                    $0.07
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                                                    <span class="inline-flex items-center gap-1 text-xs font-semibold text-gain">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
</svg>
                                        +0.00%
                                    </span>
                                                            </td>
                            
                            <td class="px-4 py-3">
                                <span class="px-2 py-0.5 text-[10px] font-medium rounded-full bg-surface-overlay text-content-secondary capitalize">
                                    crypto
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <a href="{{ route('user.trade') }}?asset=9"
                                   class="inline-flex items-center gap-1 px-3 py-1.5 text-xs font-medium rounded-lg bg-primary hover:bg-primary-dark text-content-inverse transition-colors opacity-0 group-hover:opacity-100 focus:opacity-100">
                                    Trade
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
</svg>
                                </a>
                            </td>
                        </tr>
                                            <tr class="hover:bg-surface-overlay/50 transition-colors group">
                            
                            <td class="px-4 py-3">
                                <div class="flex items-center gap-3">
                                                                            <img src="https://coin-images.coingecko.com/coins/images/39926/large/usds.webp?1726666683" alt="" class="w-8 h-8 rounded-full bg-surface-overlay" loading="lazy">
                                                                        <div>
                                        <span class="text-sm font-semibold text-content-primary">USDS</span>
                                                                                    <span class="text-xs text-content-tertiary ml-1">USDS</span>
                                                                            </div>
                                </div>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <span class="text-sm font-medium text-content-primary">
                                    $1.00
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                                                    <span class="inline-flex items-center gap-1 text-xs font-semibold text-gain">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
</svg>
                                        +0.00%
                                    </span>
                                                            </td>
                            
                            <td class="px-4 py-3">
                                <span class="px-2 py-0.5 text-[10px] font-medium rounded-full bg-surface-overlay text-content-secondary capitalize">
                                    crypto
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <a href="{{ route('user.trade') }}?asset=62"
                                   class="inline-flex items-center gap-1 px-3 py-1.5 text-xs font-medium rounded-lg bg-primary hover:bg-primary-dark text-content-inverse transition-colors opacity-0 group-hover:opacity-100 focus:opacity-100">
                                    Trade
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
</svg>
                                </a>
                            </td>
                        </tr>
                                            <tr class="hover:bg-surface-overlay/50 transition-colors group">
                            
                            <td class="px-4 py-3">
                                <div class="flex items-center gap-3">
                                                                            <img src="https://coin-images.coingecko.com/coins/images/69134/large/Rain_logo_1_.png?1762952191" alt="" class="w-8 h-8 rounded-full bg-surface-overlay" loading="lazy">
                                                                        <div>
                                        <span class="text-sm font-semibold text-content-primary">Rain</span>
                                                                                    <span class="text-xs text-content-tertiary ml-1">RAIN</span>
                                                                            </div>
                                </div>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <span class="text-sm font-medium text-content-primary">
                                    $0.01
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                                                    <span class="inline-flex items-center gap-1 text-xs font-semibold text-gain">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
</svg>
                                        +1.00%
                                    </span>
                                                            </td>
                            
                            <td class="px-4 py-3">
                                <span class="px-2 py-0.5 text-[10px] font-medium rounded-full bg-surface-overlay text-content-secondary capitalize">
                                    crypto
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <a href="{{ route('user.trade') }}?asset=71"
                                   class="inline-flex items-center gap-1 px-3 py-1.5 text-xs font-medium rounded-lg bg-primary hover:bg-primary-dark text-content-inverse transition-colors opacity-0 group-hover:opacity-100 focus:opacity-100">
                                    Trade
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
</svg>
                                </a>
                            </td>
                        </tr>
                                            <tr class="hover:bg-surface-overlay/50 transition-colors group">
                            
                            <td class="px-4 py-3">
                                <div class="flex items-center gap-3">
                                                                            <img src="https://coin-images.coingecko.com/coins/images/8418/large/leo-token.png?1696508607" alt="" class="w-8 h-8 rounded-full bg-surface-overlay" loading="lazy">
                                                                        <div>
                                        <span class="text-sm font-semibold text-content-primary">LEO Token</span>
                                                                                    <span class="text-xs text-content-tertiary ml-1">LEO</span>
                                                                            </div>
                                </div>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <span class="text-sm font-medium text-content-primary">
                                    $9.75
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                                                    <span class="inline-flex items-center gap-1 text-xs font-semibold text-gain">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
</svg>
                                        +0.80%
                                    </span>
                                                            </td>
                            
                            <td class="px-4 py-3">
                                <span class="px-2 py-0.5 text-[10px] font-medium rounded-full bg-surface-overlay text-content-secondary capitalize">
                                    crypto
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <a href="{{ route('user.trade') }}?asset=65"
                                   class="inline-flex items-center gap-1 px-3 py-1.5 text-xs font-medium rounded-lg bg-primary hover:bg-primary-dark text-content-inverse transition-colors opacity-0 group-hover:opacity-100 focus:opacity-100">
                                    Trade
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
</svg>
                                </a>
                            </td>
                        </tr>
                                            <tr class="hover:bg-surface-overlay/50 transition-colors group">
                            
                            <td class="px-4 py-3">
                                <div class="flex items-center gap-3">
                                                                            <img src="https://coin-images.coingecko.com/coins/images/486/large/circle-zcash-color.png?1696501740" alt="" class="w-8 h-8 rounded-full bg-surface-overlay" loading="lazy">
                                                                        <div>
                                        <span class="text-sm font-semibold text-content-primary">Zcash</span>
                                                                                    <span class="text-xs text-content-tertiary ml-1">ZEC</span>
                                                                            </div>
                                </div>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <span class="text-sm font-medium text-content-primary">
                                    $464.22
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                                                    <span class="inline-flex items-center gap-1 text-xs font-semibold text-loss">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6 9 12.75l6.75-6.75M2.25 12.75 9 19.5l6.75-6.75" />
</svg>
                                        -1.50%
                                    </span>
                                                            </td>
                            
                            <td class="px-4 py-3">
                                <span class="px-2 py-0.5 text-[10px] font-medium rounded-full bg-surface-overlay text-content-secondary capitalize">
                                    crypto
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <a href="{{ route('user.trade') }}?asset=76"
                                   class="inline-flex items-center gap-1 px-3 py-1.5 text-xs font-medium rounded-lg bg-primary hover:bg-primary-dark text-content-inverse transition-colors opacity-0 group-hover:opacity-100 focus:opacity-100">
                                    Trade
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
</svg>
                                </a>
                            </td>
                        </tr>
                                            <tr class="hover:bg-surface-overlay/50 transition-colors group">
                            
                            <td class="px-4 py-3">
                                <div class="flex items-center gap-3">
                                                                            <img src="https://coin-images.coingecko.com/coins/images/69/large/monero_logo.png?1696501460" alt="" class="w-8 h-8 rounded-full bg-surface-overlay" loading="lazy">
                                                                        <div>
                                        <span class="text-sm font-semibold text-content-primary">Monero</span>
                                                                                    <span class="text-xs text-content-tertiary ml-1">XMR</span>
                                                                            </div>
                                </div>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <span class="text-sm font-medium text-content-primary">
                                    $335.94
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                                                    <span class="inline-flex items-center gap-1 text-xs font-semibold text-loss">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6 9 12.75l6.75-6.75M2.25 12.75 9 19.5l6.75-6.75" />
</svg>
                                        -1.90%
                                    </span>
                                                            </td>
                            
                            <td class="px-4 py-3">
                                <span class="px-2 py-0.5 text-[10px] font-medium rounded-full bg-surface-overlay text-content-secondary capitalize">
                                    crypto
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <a href="{{ route('user.trade') }}?asset=66"
                                   class="inline-flex items-center gap-1 px-3 py-1.5 text-xs font-medium rounded-lg bg-primary hover:bg-primary-dark text-content-inverse transition-colors opacity-0 group-hover:opacity-100 focus:opacity-100">
                                    Trade
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
</svg>
                                </a>
                            </td>
                        </tr>
                                            <tr class="hover:bg-surface-overlay/50 transition-colors group">
                            
                            <td class="px-4 py-3">
                                <div class="flex items-center gap-3">
                                                                            <img src="https://coin-images.coingecko.com/coins/images/877/large/Chainlink_Logo_500.png?1760023405" alt="" class="w-8 h-8 rounded-full bg-surface-overlay" loading="lazy">
                                                                        <div>
                                        <span class="text-sm font-semibold text-content-primary">Chainlink</span>
                                                                                    <span class="text-xs text-content-tertiary ml-1">LINK</span>
                                                                            </div>
                                </div>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <span class="text-sm font-medium text-content-primary">
                                    $8.32
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                                                    <span class="inline-flex items-center gap-1 text-xs font-semibold text-loss">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6 9 12.75l6.75-6.75M2.25 12.75 9 19.5l6.75-6.75" />
</svg>
                                        -1.80%
                                    </span>
                                                            </td>
                            
                            <td class="px-4 py-3">
                                <span class="px-2 py-0.5 text-[10px] font-medium rounded-full bg-surface-overlay text-content-secondary capitalize">
                                    crypto
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <a href="{{ route('user.trade') }}?asset=12"
                                   class="inline-flex items-center gap-1 px-3 py-1.5 text-xs font-medium rounded-lg bg-primary hover:bg-primary-dark text-content-inverse transition-colors opacity-0 group-hover:opacity-100 focus:opacity-100">
                                    Trade
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
</svg>
                                </a>
                            </td>
                        </tr>
                                            <tr class="hover:bg-surface-overlay/50 transition-colors group">
                            
                            <td class="px-4 py-3">
                                <div class="flex items-center gap-3">
                                                                            <img src="https://coin-images.coingecko.com/coins/images/975/large/cardano.png?1696502090" alt="" class="w-8 h-8 rounded-full bg-surface-overlay" loading="lazy">
                                                                        <div>
                                        <span class="text-sm font-semibold text-content-primary">Cardano</span>
                                                                                    <span class="text-xs text-content-tertiary ml-1">ADA</span>
                                                                            </div>
                                </div>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <span class="text-sm font-medium text-content-primary">
                                    $0.16
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                                                    <span class="inline-flex items-center gap-1 text-xs font-semibold text-gain">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
</svg>
                                        +1.00%
                                    </span>
                                                            </td>
                            
                            <td class="px-4 py-3">
                                <span class="px-2 py-0.5 text-[10px] font-medium rounded-full bg-surface-overlay text-content-secondary capitalize">
                                    crypto
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <a href="{{ route('user.trade') }}?asset=8"
                                   class="inline-flex items-center gap-1 px-3 py-1.5 text-xs font-medium rounded-lg bg-primary hover:bg-primary-dark text-content-inverse transition-colors opacity-0 group-hover:opacity-100 focus:opacity-100">
                                    Trade
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
</svg>
                                </a>
                            </td>
                        </tr>
                                            <tr class="hover:bg-surface-overlay/50 transition-colors group">
                            
                            <td class="px-4 py-3">
                                <div class="flex items-center gap-3">
                                                                            <img src="https://coin-images.coingecko.com/coins/images/100/large/fmpFRHHQ_400x400.jpg?1735231350" alt="" class="w-8 h-8 rounded-full bg-surface-overlay" loading="lazy">
                                                                        <div>
                                        <span class="text-sm font-semibold text-content-primary">Stellar</span>
                                                                                    <span class="text-xs text-content-tertiary ml-1">XLM</span>
                                                                            </div>
                                </div>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <span class="text-sm font-medium text-content-primary">
                                    $0.17
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                                                    <span class="inline-flex items-center gap-1 text-xs font-semibold text-loss">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6 9 12.75l6.75-6.75M2.25 12.75 9 19.5l6.75-6.75" />
</svg>
                                        -1.30%
                                    </span>
                                                            </td>
                            
                            <td class="px-4 py-3">
                                <span class="px-2 py-0.5 text-[10px] font-medium rounded-full bg-surface-overlay text-content-secondary capitalize">
                                    crypto
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <a href="{{ route('user.trade') }}?asset=69"
                                   class="inline-flex items-center gap-1 px-3 py-1.5 text-xs font-medium rounded-lg bg-primary hover:bg-primary-dark text-content-inverse transition-colors opacity-0 group-hover:opacity-100 focus:opacity-100">
                                    Trade
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
</svg>
                                </a>
                            </td>
                        </tr>
                                            <tr class="hover:bg-surface-overlay/50 transition-colors group">
                            
                            <td class="px-4 py-3">
                                <div class="flex items-center gap-3">
                                                                            <img src="https://coin-images.coingecko.com/coins/images/9956/large/Badge_Dai.png?1696509996" alt="" class="w-8 h-8 rounded-full bg-surface-overlay" loading="lazy">
                                                                        <div>
                                        <span class="text-sm font-semibold text-content-primary">Dai</span>
                                                                                    <span class="text-xs text-content-tertiary ml-1">DAI</span>
                                                                            </div>
                                </div>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <span class="text-sm font-medium text-content-primary">
                                    $1.00
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                                                    <span class="inline-flex items-center gap-1 text-xs font-semibold text-gain">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
</svg>
                                        +0.00%
                                    </span>
                                                            </td>
                            
                            <td class="px-4 py-3">
                                <span class="px-2 py-0.5 text-[10px] font-medium rounded-full bg-surface-overlay text-content-secondary capitalize">
                                    crypto
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <a href="{{ route('user.trade') }}?asset=72"
                                   class="inline-flex items-center gap-1 px-3 py-1.5 text-xs font-medium rounded-lg bg-primary hover:bg-primary-dark text-content-inverse transition-colors opacity-0 group-hover:opacity-100 focus:opacity-100">
                                    Trade
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
</svg>
                                </a>
                            </td>
                        </tr>
                                            <tr class="hover:bg-surface-overlay/50 transition-colors group">
                            
                            <td class="px-4 py-3">
                                <div class="flex items-center gap-3">
                                                                            <img src="https://coin-images.coingecko.com/coins/images/70468/large/Canton-Ticker_%281%29.png?1762826299" alt="" class="w-8 h-8 rounded-full bg-surface-overlay" loading="lazy">
                                                                        <div>
                                        <span class="text-sm font-semibold text-content-primary">Canton</span>
                                                                                    <span class="text-xs text-content-tertiary ml-1">CC</span>
                                                                            </div>
                                </div>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <span class="text-sm font-medium text-content-primary">
                                    $0.12
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                                                    <span class="inline-flex items-center gap-1 text-xs font-semibold text-loss">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6 9 12.75l6.75-6.75M2.25 12.75 9 19.5l6.75-6.75" />
</svg>
                                        -2.80%
                                    </span>
                                                            </td>
                            
                            <td class="px-4 py-3">
                                <span class="px-2 py-0.5 text-[10px] font-medium rounded-full bg-surface-overlay text-content-secondary capitalize">
                                    crypto
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <a href="{{ route('user.trade') }}?asset=68"
                                   class="inline-flex items-center gap-1 px-3 py-1.5 text-xs font-medium rounded-lg bg-primary hover:bg-primary-dark text-content-inverse transition-colors opacity-0 group-hover:opacity-100 focus:opacity-100">
                                    Trade
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
</svg>
                                </a>
                            </td>
                        </tr>
                                            <tr class="hover:bg-surface-overlay/50 transition-colors group">
                            
                            <td class="px-4 py-3">
                                <div class="flex items-center gap-3">
                                                                            <img src="https://coin-images.coingecko.com/coins/images/780/large/bitcoin-cash-circle.png?1696501932" alt="" class="w-8 h-8 rounded-full bg-surface-overlay" loading="lazy">
                                                                        <div>
                                        <span class="text-sm font-semibold text-content-primary">Bitcoin Cash</span>
                                                                                    <span class="text-xs text-content-tertiary ml-1">BCH</span>
                                                                            </div>
                                </div>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <span class="text-sm font-medium text-content-primary">
                                    $212.61
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                                                    <span class="inline-flex items-center gap-1 text-xs font-semibold text-loss">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6 9 12.75l6.75-6.75M2.25 12.75 9 19.5l6.75-6.75" />
</svg>
                                        -0.70%
                                    </span>
                                                            </td>
                            
                            <td class="px-4 py-3">
                                <span class="px-2 py-0.5 text-[10px] font-medium rounded-full bg-surface-overlay text-content-secondary capitalize">
                                    crypto
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <a href="{{ route('user.trade') }}?asset=63"
                                   class="inline-flex items-center gap-1 px-3 py-1.5 text-xs font-medium rounded-lg bg-primary hover:bg-primary-dark text-content-inverse transition-colors opacity-0 group-hover:opacity-100 focus:opacity-100">
                                    Trade
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
</svg>
                                </a>
                            </td>
                        </tr>
                                            <tr class="hover:bg-surface-overlay/50 transition-colors group">
                            
                            <td class="px-4 py-3">
                                <div class="flex items-center gap-3">
                                                                            <img src="https://coin-images.coingecko.com/coins/images/54977/large/USD1_1000x1000_transparent.png?1749297002" alt="" class="w-8 h-8 rounded-full bg-surface-overlay" loading="lazy">
                                                                        <div>
                                        <span class="text-sm font-semibold text-content-primary">USD1</span>
                                                                                    <span class="text-xs text-content-tertiary ml-1">USD1</span>
                                                                            </div>
                                </div>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <span class="text-sm font-medium text-content-primary">
                                    $1.00
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                                                    <span class="inline-flex items-center gap-1 text-xs font-semibold text-gain">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
</svg>
                                        +0.00%
                                    </span>
                                                            </td>
                            
                            <td class="px-4 py-3">
                                <span class="px-2 py-0.5 text-[10px] font-medium rounded-full bg-surface-overlay text-content-secondary capitalize">
                                    crypto
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <a href="{{ route('user.trade') }}?asset=70"
                                   class="inline-flex items-center gap-1 px-3 py-1.5 text-xs font-medium rounded-lg bg-primary hover:bg-primary-dark text-content-inverse transition-colors opacity-0 group-hover:opacity-100 focus:opacity-100">
                                    Trade
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
</svg>
                                </a>
                            </td>
                        </tr>
                                            <tr class="hover:bg-surface-overlay/50 transition-colors group">
                            
                            <td class="px-4 py-3">
                                <div class="flex items-center gap-3">
                                                                            <img src="https://coin-images.coingecko.com/coins/images/17980/large/Gram_Circular_Badge.png?1781524778" alt="" class="w-8 h-8 rounded-full bg-surface-overlay" loading="lazy">
                                                                        <div>
                                        <span class="text-sm font-semibold text-content-primary">Gram (prev. Toncoin)</span>
                                                                                    <span class="text-xs text-content-tertiary ml-1">GRAM</span>
                                                                            </div>
                                </div>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <span class="text-sm font-medium text-content-primary">
                                    $1.45
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                                                    <span class="inline-flex items-center gap-1 text-xs font-semibold text-loss">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6 9 12.75l6.75-6.75M2.25 12.75 9 19.5l6.75-6.75" />
</svg>
                                        -0.90%
                                    </span>
                                                            </td>
                            
                            <td class="px-4 py-3">
                                <span class="px-2 py-0.5 text-[10px] font-medium rounded-full bg-surface-overlay text-content-secondary capitalize">
                                    crypto
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <a href="{{ route('user.trade') }}?asset=78"
                                   class="inline-flex items-center gap-1 px-3 py-1.5 text-xs font-medium rounded-lg bg-primary hover:bg-primary-dark text-content-inverse transition-colors opacity-0 group-hover:opacity-100 focus:opacity-100">
                                    Trade
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
</svg>
                                </a>
                            </td>
                        </tr>
                                            <tr class="hover:bg-surface-overlay/50 transition-colors group">
                            
                            <td class="px-4 py-3">
                                <div class="flex items-center gap-3">
                                                                            <img src="https://coin-images.coingecko.com/coins/images/33613/large/usde.png?1733810059" alt="" class="w-8 h-8 rounded-full bg-surface-overlay" loading="lazy">
                                                                        <div>
                                        <span class="text-sm font-semibold text-content-primary">Ethena USDe</span>
                                                                                    <span class="text-xs text-content-tertiary ml-1">USDE</span>
                                                                            </div>
                                </div>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <span class="text-sm font-medium text-content-primary">
                                    $1.00
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                                                    <span class="inline-flex items-center gap-1 text-xs font-semibold text-gain">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
</svg>
                                        +0.00%
                                    </span>
                                                            </td>
                            
                            <td class="px-4 py-3">
                                <span class="px-2 py-0.5 text-[10px] font-medium rounded-full bg-surface-overlay text-content-secondary capitalize">
                                    crypto
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <a href="{{ route('user.trade') }}?asset=67"
                                   class="inline-flex items-center gap-1 px-3 py-1.5 text-xs font-medium rounded-lg bg-primary hover:bg-primary-dark text-content-inverse transition-colors opacity-0 group-hover:opacity-100 focus:opacity-100">
                                    Trade
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
</svg>
                                </a>
                            </td>
                        </tr>
                                            <tr class="hover:bg-surface-overlay/50 transition-colors group">
                            
                            <td class="px-4 py-3">
                                <div class="flex items-center gap-3">
                                                                            <img src="https://coin-images.coingecko.com/coins/images/2/large/litecoin.png?1696501400" alt="" class="w-8 h-8 rounded-full bg-surface-overlay" loading="lazy">
                                                                        <div>
                                        <span class="text-sm font-semibold text-content-primary">Litecoin</span>
                                                                                    <span class="text-xs text-content-tertiary ml-1">LTC</span>
                                                                            </div>
                                </div>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <span class="text-sm font-medium text-content-primary">
                                    $46.25
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                                                    <span class="inline-flex items-center gap-1 text-xs font-semibold text-gain">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
</svg>
                                        +0.50%
                                    </span>
                                                            </td>
                            
                            <td class="px-4 py-3">
                                <span class="px-2 py-0.5 text-[10px] font-medium rounded-full bg-surface-overlay text-content-secondary capitalize">
                                    crypto
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <a href="{{ route('user.trade') }}?asset=15"
                                   class="inline-flex items-center gap-1 px-3 py-1.5 text-xs font-medium rounded-lg bg-primary hover:bg-primary-dark text-content-inverse transition-colors opacity-0 group-hover:opacity-100 focus:opacity-100">
                                    Trade
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
</svg>
                                </a>
                            </td>
                        </tr>
                                            <tr class="hover:bg-surface-overlay/50 transition-colors group">
                            
                            <td class="px-4 py-3">
                                <div class="flex items-center gap-3">
                                                                            <img src="https://coin-images.coingecko.com/coins/images/51281/large/GDN_USDG_Token_200x200.png?1730484111" alt="" class="w-8 h-8 rounded-full bg-surface-overlay" loading="lazy">
                                                                        <div>
                                        <span class="text-sm font-semibold text-content-primary">Global Dollar</span>
                                                                                    <span class="text-xs text-content-tertiary ml-1">USDG</span>
                                                                            </div>
                                </div>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <span class="text-sm font-medium text-content-primary">
                                    $1.00
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                                                    <span class="inline-flex items-center gap-1 text-xs font-semibold text-loss">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6 9 12.75l6.75-6.75M2.25 12.75 9 19.5l6.75-6.75" />
</svg>
                                        -0.10%
                                    </span>
                                                            </td>
                            
                            <td class="px-4 py-3">
                                <span class="px-2 py-0.5 text-[10px] font-medium rounded-full bg-surface-overlay text-content-secondary capitalize">
                                    crypto
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <a href="{{ route('user.trade') }}?asset=84"
                                   class="inline-flex items-center gap-1 px-3 py-1.5 text-xs font-medium rounded-lg bg-primary hover:bg-primary-dark text-content-inverse transition-colors opacity-0 group-hover:opacity-100 focus:opacity-100">
                                    Trade
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
</svg>
                                </a>
                            </td>
                        </tr>
                                            <tr class="hover:bg-surface-overlay/50 transition-colors group">
                            
                            <td class="px-4 py-3">
                                <div class="flex items-center gap-3">
                                                                            <img src="https://coin-images.coingecko.com/coins/images/28452/large/ARUsPeNQ_400x400.jpeg?1696527447" alt="" class="w-8 h-8 rounded-full bg-surface-overlay" loading="lazy">
                                                                        <div>
                                        <span class="text-sm font-semibold text-content-primary">Bittensor</span>
                                                                                    <span class="text-xs text-content-tertiary ml-1">TAO</span>
                                                                            </div>
                                </div>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <span class="text-sm font-medium text-content-primary">
                                    $335.37
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                                                    <span class="inline-flex items-center gap-1 text-xs font-semibold text-loss">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6 9 12.75l6.75-6.75M2.25 12.75 9 19.5l6.75-6.75" />
</svg>
                                        -0.04%
                                    </span>
                                                            </td>
                            
                            <td class="px-4 py-3">
                                <span class="px-2 py-0.5 text-[10px] font-medium rounded-full bg-surface-overlay text-content-secondary capitalize">
                                    crypto
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <a href="{{ route('user.trade') }}?asset=83"
                                   class="inline-flex items-center gap-1 px-3 py-1.5 text-xs font-medium rounded-lg bg-primary hover:bg-primary-dark text-content-inverse transition-colors opacity-0 group-hover:opacity-100 focus:opacity-100">
                                    Trade
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
</svg>
                                </a>
                            </td>
                        </tr>
                                            <tr class="hover:bg-surface-overlay/50 transition-colors group">
                            
                            <td class="px-4 py-3">
                                <div class="flex items-center gap-3">
                                                                            <img src="https://coin-images.coingecko.com/coins/images/3688/large/hbar.png?1696504364" alt="" class="w-8 h-8 rounded-full bg-surface-overlay" loading="lazy">
                                                                        <div>
                                        <span class="text-sm font-semibold text-content-primary">Hedera</span>
                                                                                    <span class="text-xs text-content-tertiary ml-1">HBAR</span>
                                                                            </div>
                                </div>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <span class="text-sm font-medium text-content-primary">
                                    $0.07
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                                                    <span class="inline-flex items-center gap-1 text-xs font-semibold text-gain">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
</svg>
                                        +1.20%
                                    </span>
                                                            </td>
                            
                            <td class="px-4 py-3">
                                <span class="px-2 py-0.5 text-[10px] font-medium rounded-full bg-surface-overlay text-content-secondary capitalize">
                                    crypto
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <a href="{{ route('user.trade') }}?asset=73"
                                   class="inline-flex items-center gap-1 px-3 py-1.5 text-xs font-medium rounded-lg bg-primary hover:bg-primary-dark text-content-inverse transition-colors opacity-0 group-hover:opacity-100 focus:opacity-100">
                                    Trade
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
</svg>
                                </a>
                            </td>
                        </tr>
                                            <tr class="hover:bg-surface-overlay/50 transition-colors group">
                            
                            <td class="px-4 py-3">
                                <div class="flex items-center gap-3">
                                                                            <img src="https://coin-images.coingecko.com/coins/images/50767/large/wlfi.png?1756438915" alt="" class="w-8 h-8 rounded-full bg-surface-overlay" loading="lazy">
                                                                        <div>
                                        <span class="text-sm font-semibold text-content-primary">World Liberty Financial</span>
                                                                                    <span class="text-xs text-content-tertiary ml-1">WLFI</span>
                                                                            </div>
                                </div>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <span class="text-sm font-medium text-content-primary">
                                    $0.09
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                                                    <span class="inline-flex items-center gap-1 text-xs font-semibold text-loss">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6 9 12.75l6.75-6.75M2.25 12.75 9 19.5l6.75-6.75" />
</svg>
                                        -3.03%
                                    </span>
                                                            </td>
                            
                            <td class="px-4 py-3">
                                <span class="px-2 py-0.5 text-[10px] font-medium rounded-full bg-surface-overlay text-content-secondary capitalize">
                                    crypto
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <a href="{{ route('user.trade') }}?asset=81"
                                   class="inline-flex items-center gap-1 px-3 py-1.5 text-xs font-medium rounded-lg bg-primary hover:bg-primary-dark text-content-inverse transition-colors opacity-0 group-hover:opacity-100 focus:opacity-100">
                                    Trade
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
</svg>
                                </a>
                            </td>
                        </tr>
                                            <tr class="hover:bg-surface-overlay/50 transition-colors group">
                            
                            <td class="px-4 py-3">
                                <div class="flex items-center gap-3">
                                                                            <img src="https://coin-images.coingecko.com/coins/images/51054/large/Hashnote_SDYC_200x200.png?1730370965" alt="" class="w-8 h-8 rounded-full bg-surface-overlay" loading="lazy">
                                                                        <div>
                                        <span class="text-sm font-semibold text-content-primary">Circle USYC</span>
                                                                                    <span class="text-xs text-content-tertiary ml-1">USYC</span>
                                                                            </div>
                                </div>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <span class="text-sm font-medium text-content-primary">
                                    $1.13
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                                                    <span class="inline-flex items-center gap-1 text-xs font-semibold text-gain">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
</svg>
                                        +0.00%
                                    </span>
                                                            </td>
                            
                            <td class="px-4 py-3">
                                <span class="px-2 py-0.5 text-[10px] font-medium rounded-full bg-surface-overlay text-content-secondary capitalize">
                                    crypto
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <a href="{{ route('user.trade') }}?asset=85"
                                   class="inline-flex items-center gap-1 px-3 py-1.5 text-xs font-medium rounded-lg bg-primary hover:bg-primary-dark text-content-inverse transition-colors opacity-0 group-hover:opacity-100 focus:opacity-100">
                                    Trade
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
</svg>
                                </a>
                            </td>
                        </tr>
                                            <tr class="hover:bg-surface-overlay/50 transition-colors group">
                            
                            <td class="px-4 py-3">
                                <div class="flex items-center gap-3">
                                                                            <img src="https://coin-images.coingecko.com/coins/images/12559/large/Avalanche_Circle_RedWhite_Trans.png?1696512369" alt="" class="w-8 h-8 rounded-full bg-surface-overlay" loading="lazy">
                                                                        <div>
                                        <span class="text-sm font-semibold text-content-primary">Avalanche</span>
                                                                                    <span class="text-xs text-content-tertiary ml-1">AVAX</span>
                                                                            </div>
                                </div>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <span class="text-sm font-medium text-content-primary">
                                    $6.51
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                                                    <span class="inline-flex items-center gap-1 text-xs font-semibold text-gain">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
</svg>
                                        +0.30%
                                    </span>
                                                            </td>
                            
                            <td class="px-4 py-3">
                                <span class="px-2 py-0.5 text-[10px] font-medium rounded-full bg-surface-overlay text-content-secondary capitalize">
                                    crypto
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <a href="{{ route('user.trade') }}?asset=13"
                                   class="inline-flex items-center gap-1 px-3 py-1.5 text-xs font-medium rounded-lg bg-primary hover:bg-primary-dark text-content-inverse transition-colors opacity-0 group-hover:opacity-100 focus:opacity-100">
                                    Trade
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
</svg>
                                </a>
                            </td>
                        </tr>
                                            <tr class="hover:bg-surface-overlay/50 transition-colors group">
                            
                            <td class="px-4 py-3">
                                <div class="flex items-center gap-3">
                                                                            <img src="https://coin-images.coingecko.com/coins/images/26375/large/sui-ocean-square.png?1727791290" alt="" class="w-8 h-8 rounded-full bg-surface-overlay" loading="lazy">
                                                                        <div>
                                        <span class="text-sm font-semibold text-content-primary">Sui</span>
                                                                                    <span class="text-xs text-content-tertiary ml-1">SUI</span>
                                                                            </div>
                                </div>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <span class="text-sm font-medium text-content-primary">
                                    $0.69
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                                                    <span class="inline-flex items-center gap-1 text-xs font-semibold text-loss">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6 9 12.75l6.75-6.75M2.25 12.75 9 19.5l6.75-6.75" />
</svg>
                                        -1.00%
                                    </span>
                                                            </td>
                            
                            <td class="px-4 py-3">
                                <span class="px-2 py-0.5 text-[10px] font-medium rounded-full bg-surface-overlay text-content-secondary capitalize">
                                    crypto
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <a href="{{ route('user.trade') }}?asset=75"
                                   class="inline-flex items-center gap-1 px-3 py-1.5 text-xs font-medium rounded-lg bg-primary hover:bg-primary-dark text-content-inverse transition-colors opacity-0 group-hover:opacity-100 focus:opacity-100">
                                    Trade
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
</svg>
                                </a>
                            </td>
                        </tr>
                                            <tr class="hover:bg-surface-overlay/50 transition-colors group">
                            
                            <td class="px-4 py-3">
                                <div class="flex items-center gap-3">
                                                                            <img src="https://coin-images.coingecko.com/coins/images/11939/large/shiba.png?1696511800" alt="" class="w-8 h-8 rounded-full bg-surface-overlay" loading="lazy">
                                                                        <div>
                                        <span class="text-sm font-semibold text-content-primary">Shiba Inu</span>
                                                                                    <span class="text-xs text-content-tertiary ml-1">SHIB</span>
                                                                            </div>
                                </div>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <span class="text-sm font-medium text-content-primary">
                                    $0.00
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                                                    <span class="inline-flex items-center gap-1 text-xs font-semibold text-loss">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6 9 12.75l6.75-6.75M2.25 12.75 9 19.5l6.75-6.75" />
</svg>
                                        -6.10%
                                    </span>
                                                            </td>
                            
                            <td class="px-4 py-3">
                                <span class="px-2 py-0.5 text-[10px] font-medium rounded-full bg-surface-overlay text-content-secondary capitalize">
                                    crypto
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <a href="{{ route('user.trade') }}?asset=77"
                                   class="inline-flex items-center gap-1 px-3 py-1.5 text-xs font-medium rounded-lg bg-primary hover:bg-primary-dark text-content-inverse transition-colors opacity-0 group-hover:opacity-100 focus:opacity-100">
                                    Trade
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
</svg>
                                </a>
                            </td>
                        </tr>
                                            <tr class="hover:bg-surface-overlay/50 transition-colors group">
                            
                            <td class="px-4 py-3">
                                <div class="flex items-center gap-3">
                                                                            <img src="https://coin-images.coingecko.com/coins/images/31212/large/PYUSD_Token_Logo_2x.png?1765987788" alt="" class="w-8 h-8 rounded-full bg-surface-overlay" loading="lazy">
                                                                        <div>
                                        <span class="text-sm font-semibold text-content-primary">PayPal USD</span>
                                                                                    <span class="text-xs text-content-tertiary ml-1">PYUSD</span>
                                                                            </div>
                                </div>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <span class="text-sm font-medium text-content-primary">
                                    $1.00
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                                                    <span class="inline-flex items-center gap-1 text-xs font-semibold text-gain">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
</svg>
                                        +0.10%
                                    </span>
                                                            </td>
                            
                            <td class="px-4 py-3">
                                <span class="px-2 py-0.5 text-[10px] font-medium rounded-full bg-surface-overlay text-content-secondary capitalize">
                                    crypto
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <a href="{{ route('user.trade') }}?asset=74"
                                   class="inline-flex items-center gap-1 px-3 py-1.5 text-xs font-medium rounded-lg bg-primary hover:bg-primary-dark text-content-inverse transition-colors opacity-0 group-hover:opacity-100 focus:opacity-100">
                                    Trade
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
</svg>
                                </a>
                            </td>
                        </tr>
                                            <tr class="hover:bg-surface-overlay/50 transition-colors group">
                            
                            <td class="px-4 py-3">
                                <div class="flex items-center gap-3">
                                                                            <img src="https://coin-images.coingecko.com/coins/images/7310/large/cro_token_logo.png?1696507599" alt="" class="w-8 h-8 rounded-full bg-surface-overlay" loading="lazy">
                                                                        <div>
                                        <span class="text-sm font-semibold text-content-primary">Cronos</span>
                                                                                    <span class="text-xs text-content-tertiary ml-1">CRO</span>
                                                                            </div>
                                </div>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <span class="text-sm font-medium text-content-primary">
                                    $0.06
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                                                    <span class="inline-flex items-center gap-1 text-xs font-semibold text-loss">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6 9 12.75l6.75-6.75M2.25 12.75 9 19.5l6.75-6.75" />
</svg>
                                        -1.16%
                                    </span>
                                                            </td>
                            
                            <td class="px-4 py-3">
                                <span class="px-2 py-0.5 text-[10px] font-medium rounded-full bg-surface-overlay text-content-secondary capitalize">
                                    crypto
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <a href="{{ route('user.trade') }}?asset=79"
                                   class="inline-flex items-center gap-1 px-3 py-1.5 text-xs font-medium rounded-lg bg-primary hover:bg-primary-dark text-content-inverse transition-colors opacity-0 group-hover:opacity-100 focus:opacity-100">
                                    Trade
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
</svg>
                                </a>
                            </td>
                        </tr>
                                            <tr class="hover:bg-surface-overlay/50 transition-colors group">
                            
                            <td class="px-4 py-3">
                                <div class="flex items-center gap-3">
                                                                            <img src="https://coin-images.coingecko.com/coins/images/36291/large/blackrock.png?1711013223" alt="" class="w-8 h-8 rounded-full bg-surface-overlay" loading="lazy">
                                                                        <div>
                                        <span class="text-sm font-semibold text-content-primary">BlackRock USD Institutional Digital Liquidity Fund</span>
                                                                                    <span class="text-xs text-content-tertiary ml-1">BUIDL</span>
                                                                            </div>
                                </div>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <span class="text-sm font-medium text-content-primary">
                                    $1.00
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                                                    <span class="inline-flex items-center gap-1 text-xs font-semibold text-gain">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
</svg>
                                        +0.00%
                                    </span>
                                                            </td>
                            
                            <td class="px-4 py-3">
                                <span class="px-2 py-0.5 text-[10px] font-medium rounded-full bg-surface-overlay text-content-secondary capitalize">
                                    crypto
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <a href="{{ route('user.trade') }}?asset=87"
                                   class="inline-flex items-center gap-1 px-3 py-1.5 text-xs font-medium rounded-lg bg-primary hover:bg-primary-dark text-content-inverse transition-colors opacity-0 group-hover:opacity-100 focus:opacity-100">
                                    Trade
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
</svg>
                                </a>
                            </td>
                        </tr>
                                            <tr class="hover:bg-surface-overlay/50 transition-colors group">
                            
                            <td class="px-4 py-3">
                                <div class="flex items-center gap-3">
                                                                            <img src="https://coin-images.coingecko.com/coins/images/10365/large/near.jpg?1696510367" alt="" class="w-8 h-8 rounded-full bg-surface-overlay" loading="lazy">
                                                                        <div>
                                        <span class="text-sm font-semibold text-content-primary">NEAR Protocol</span>
                                                                                    <span class="text-xs text-content-tertiary ml-1">NEAR</span>
                                                                            </div>
                                </div>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <span class="text-sm font-medium text-content-primary">
                                    $1.95
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                                                    <span class="inline-flex items-center gap-1 text-xs font-semibold text-loss">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6 9 12.75l6.75-6.75M2.25 12.75 9 19.5l6.75-6.75" />
</svg>
                                        -1.61%
                                    </span>
                                                            </td>
                            
                            <td class="px-4 py-3">
                                <span class="px-2 py-0.5 text-[10px] font-medium rounded-full bg-surface-overlay text-content-secondary capitalize">
                                    crypto
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <a href="{{ route('user.trade') }}?asset=122"
                                   class="inline-flex items-center gap-1 px-3 py-1.5 text-xs font-medium rounded-lg bg-primary hover:bg-primary-dark text-content-inverse transition-colors opacity-0 group-hover:opacity-100 focus:opacity-100">
                                    Trade
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
</svg>
                                </a>
                            </td>
                        </tr>
                                            <tr class="hover:bg-surface-overlay/50 transition-colors group">
                            
                            <td class="px-4 py-3">
                                <div class="flex items-center gap-3">
                                                                            <img src="https://coin-images.coingecko.com/coins/images/10481/large/logo.png?1774627372" alt="" class="w-8 h-8 rounded-full bg-surface-overlay" loading="lazy">
                                                                        <div>
                                        <span class="text-sm font-semibold text-content-primary">Tether Gold</span>
                                                                                    <span class="text-xs text-content-tertiary ml-1">XAUT</span>
                                                                            </div>
                                </div>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <span class="text-sm font-medium text-content-primary">
                                    $4,119.82
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                                                    <span class="inline-flex items-center gap-1 text-xs font-semibold text-loss">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6 9 12.75l6.75-6.75M2.25 12.75 9 19.5l6.75-6.75" />
</svg>
                                        -0.10%
                                    </span>
                                                            </td>
                            
                            <td class="px-4 py-3">
                                <span class="px-2 py-0.5 text-[10px] font-medium rounded-full bg-surface-overlay text-content-secondary capitalize">
                                    crypto
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <a href="{{ route('user.trade') }}?asset=80"
                                   class="inline-flex items-center gap-1 px-3 py-1.5 text-xs font-medium rounded-lg bg-primary hover:bg-primary-dark text-content-inverse transition-colors opacity-0 group-hover:opacity-100 focus:opacity-100">
                                    Trade
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
</svg>
                                </a>
                            </td>
                        </tr>
                                            <tr class="hover:bg-surface-overlay/50 transition-colors group">
                            
                            <td class="px-4 py-3">
                                <div class="flex items-center gap-3">
                                                                            <img src="https://coin-images.coingecko.com/coins/images/39651/large/RLUSD_200x200_%281%29.png?1727376633" alt="" class="w-8 h-8 rounded-full bg-surface-overlay" loading="lazy">
                                                                        <div>
                                        <span class="text-sm font-semibold text-content-primary">Ripple USD</span>
                                                                                    <span class="text-xs text-content-tertiary ml-1">RLUSD</span>
                                                                            </div>
                                </div>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <span class="text-sm font-medium text-content-primary">
                                    $1.00
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                                                    <span class="inline-flex items-center gap-1 text-xs font-semibold text-gain">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
</svg>
                                        +0.01%
                                    </span>
                                                            </td>
                            
                            <td class="px-4 py-3">
                                <span class="px-2 py-0.5 text-[10px] font-medium rounded-full bg-surface-overlay text-content-secondary capitalize">
                                    crypto
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <a href="{{ route('user.trade') }}?asset=123"
                                   class="inline-flex items-center gap-1 px-3 py-1.5 text-xs font-medium rounded-lg bg-primary hover:bg-primary-dark text-content-inverse transition-colors opacity-0 group-hover:opacity-100 focus:opacity-100">
                                    Trade
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
</svg>
                                </a>
                            </td>
                        </tr>
                                            <tr class="hover:bg-surface-overlay/50 transition-colors group">
                            
                            <td class="px-4 py-3">
                                <div class="flex items-center gap-3">
                                                                            <img src="https://coin-images.coingecko.com/coins/images/53247/large/square-bg-transparent.png?1752637478" alt="" class="w-8 h-8 rounded-full bg-surface-overlay" loading="lazy">
                                                                        <div>
                                        <span class="text-sm font-semibold text-content-primary">MemeCore</span>
                                                                                    <span class="text-xs text-content-tertiary ml-1">M</span>
                                                                            </div>
                                </div>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <span class="text-sm font-medium text-content-primary">
                                    $1.18
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                                                    <span class="inline-flex items-center gap-1 text-xs font-semibold text-loss">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6 9 12.75l6.75-6.75M2.25 12.75 9 19.5l6.75-6.75" />
</svg>
                                        -15.83%
                                    </span>
                                                            </td>
                            
                            <td class="px-4 py-3">
                                <span class="px-2 py-0.5 text-[10px] font-medium rounded-full bg-surface-overlay text-content-secondary capitalize">
                                    crypto
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <a href="{{ route('user.trade') }}?asset=82"
                                   class="inline-flex items-center gap-1 px-3 py-1.5 text-xs font-medium rounded-lg bg-primary hover:bg-primary-dark text-content-inverse transition-colors opacity-0 group-hover:opacity-100 focus:opacity-100">
                                    Trade
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
</svg>
                                </a>
                            </td>
                        </tr>
                                            <tr class="hover:bg-surface-overlay/50 transition-colors group">
                            
                            <td class="px-4 py-3">
                                <div class="flex items-center gap-3">
                                                                            <img src="https://coin-images.coingecko.com/coins/images/26580/large/ONDO.png?1696525656" alt="" class="w-8 h-8 rounded-full bg-surface-overlay" loading="lazy">
                                                                        <div>
                                        <span class="text-sm font-semibold text-content-primary">Ondo</span>
                                                                                    <span class="text-xs text-content-tertiary ml-1">ONDO</span>
                                                                            </div>
                                </div>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <span class="text-sm font-medium text-content-primary">
                                    $0.32
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                                                    <span class="inline-flex items-center gap-1 text-xs font-semibold text-gain">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
</svg>
                                        +0.92%
                                    </span>
                                                            </td>
                            
                            <td class="px-4 py-3">
                                <span class="px-2 py-0.5 text-[10px] font-medium rounded-full bg-surface-overlay text-content-secondary capitalize">
                                    crypto
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <a href="{{ route('user.trade') }}?asset=124"
                                   class="inline-flex items-center gap-1 px-3 py-1.5 text-xs font-medium rounded-lg bg-primary hover:bg-primary-dark text-content-inverse transition-colors opacity-0 group-hover:opacity-100 focus:opacity-100">
                                    Trade
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
</svg>
                                </a>
                            </td>
                        </tr>
                                            <tr class="hover:bg-surface-overlay/50 transition-colors group">
                            
                            <td class="px-4 py-3">
                                <div class="flex items-center gap-3">
                                                                            <img src="https://coin-images.coingecko.com/coins/images/25380/large/UUSD.jpg?1696524513" alt="" class="w-8 h-8 rounded-full bg-surface-overlay" loading="lazy">
                                                                        <div>
                                        <span class="text-sm font-semibold text-content-primary">USDD</span>
                                                                                    <span class="text-xs text-content-tertiary ml-1">USDD</span>
                                                                            </div>
                                </div>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <span class="text-sm font-medium text-content-primary">
                                    $1.00
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                                                    <span class="inline-flex items-center gap-1 text-xs font-semibold text-loss">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6 9 12.75l6.75-6.75M2.25 12.75 9 19.5l6.75-6.75" />
</svg>
                                        -0.02%
                                    </span>
                                                            </td>
                            
                            <td class="px-4 py-3">
                                <span class="px-2 py-0.5 text-[10px] font-medium rounded-full bg-surface-overlay text-content-secondary capitalize">
                                    crypto
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <a href="{{ route('user.trade') }}?asset=125"
                                   class="inline-flex items-center gap-1 px-3 py-1.5 text-xs font-medium rounded-lg bg-primary hover:bg-primary-dark text-content-inverse transition-colors opacity-0 group-hover:opacity-100 focus:opacity-100">
                                    Trade
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
</svg>
                                </a>
                            </td>
                        </tr>
                                            <tr class="hover:bg-surface-overlay/50 transition-colors group">
                            
                            <td class="px-4 py-3">
                                <div class="flex items-center gap-3">
                                                                            <img src="https://coin-images.coingecko.com/coins/images/12171/large/polkadot.jpg?1766533446" alt="" class="w-8 h-8 rounded-full bg-surface-overlay" loading="lazy">
                                                                        <div>
                                        <span class="text-sm font-semibold text-content-primary">Polkadot</span>
                                                                                    <span class="text-xs text-content-tertiary ml-1">DOT</span>
                                                                            </div>
                                </div>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <span class="text-sm font-medium text-content-primary">
                                    $0.83
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                                                    <span class="inline-flex items-center gap-1 text-xs font-semibold text-gain">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
</svg>
                                        +0.88%
                                    </span>
                                                            </td>
                            
                            <td class="px-4 py-3">
                                <span class="px-2 py-0.5 text-[10px] font-medium rounded-full bg-surface-overlay text-content-secondary capitalize">
                                    crypto
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <a href="{{ route('user.trade') }}?asset=11"
                                   class="inline-flex items-center gap-1 px-3 py-1.5 text-xs font-medium rounded-lg bg-primary hover:bg-primary-dark text-content-inverse transition-colors opacity-0 group-hover:opacity-100 focus:opacity-100">
                                    Trade
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
</svg>
                                </a>
                            </td>
                        </tr>
                                            <tr class="hover:bg-surface-overlay/50 transition-colors group">
                            
                            <td class="px-4 py-3">
                                <div class="flex items-center gap-3">
                                                                            <img src="https://coin-images.coingecko.com/coins/images/29837/large/Morpho-token-icon.png?1726771230" alt="" class="w-8 h-8 rounded-full bg-surface-overlay" loading="lazy">
                                                                        <div>
                                        <span class="text-sm font-semibold text-content-primary">Morpho</span>
                                                                                    <span class="text-xs text-content-tertiary ml-1">MORPHO</span>
                                                                            </div>
                                </div>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <span class="text-sm font-medium text-content-primary">
                                    $2.05
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                                                    <span class="inline-flex items-center gap-1 text-xs font-semibold text-loss">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6 9 12.75l6.75-6.75M2.25 12.75 9 19.5l6.75-6.75" />
</svg>
                                        -1.93%
                                    </span>
                                                            </td>
                            
                            <td class="px-4 py-3">
                                <span class="px-2 py-0.5 text-[10px] font-medium rounded-full bg-surface-overlay text-content-secondary capitalize">
                                    crypto
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <a href="{{ route('user.trade') }}?asset=126"
                                   class="inline-flex items-center gap-1 px-3 py-1.5 text-xs font-medium rounded-lg bg-primary hover:bg-primary-dark text-content-inverse transition-colors opacity-0 group-hover:opacity-100 focus:opacity-100">
                                    Trade
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
</svg>
                                </a>
                            </td>
                        </tr>
                                            <tr class="hover:bg-surface-overlay/50 transition-colors group">
                            
                            <td class="px-4 py-3">
                                <div class="flex items-center gap-3">
                                                                            <img src="https://coin-images.coingecko.com/coins/images/39657/large/EUTBL.png?1723517425" alt="" class="w-8 h-8 rounded-full bg-surface-overlay" loading="lazy">
                                                                        <div>
                                        <span class="text-sm font-semibold text-content-primary">Spiko EU T-Bills Money Market Fund</span>
                                                                                    <span class="text-xs text-content-tertiary ml-1">EUTBL</span>
                                                                            </div>
                                </div>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <span class="text-sm font-medium text-content-primary">
                                    $1.21
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                                                    <span class="inline-flex items-center gap-1 text-xs font-semibold text-gain">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
</svg>
                                        +0.34%
                                    </span>
                                                            </td>
                            
                            <td class="px-4 py-3">
                                <span class="px-2 py-0.5 text-[10px] font-medium rounded-full bg-surface-overlay text-content-secondary capitalize">
                                    crypto
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <a href="{{ route('user.trade') }}?asset=88"
                                   class="inline-flex items-center gap-1 px-3 py-1.5 text-xs font-medium rounded-lg bg-primary hover:bg-primary-dark text-content-inverse transition-colors opacity-0 group-hover:opacity-100 focus:opacity-100">
                                    Trade
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
</svg>
                                </a>
                            </td>
                        </tr>
                                            <tr class="hover:bg-surface-overlay/50 transition-colors group">
                            
                            <td class="px-4 py-3">
                                <div class="flex items-center gap-3">
                                                                            <img src="https://coin-images.coingecko.com/coins/images/56040/large/bcap_logo_200.png?1748088291" alt="" class="w-8 h-8 rounded-full bg-surface-overlay" loading="lazy">
                                                                        <div>
                                        <span class="text-sm font-semibold text-content-primary">Blockchain Capital</span>
                                                                                    <span class="text-xs text-content-tertiary ml-1">BCAP</span>
                                                                            </div>
                                </div>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <span class="text-sm font-medium text-content-primary">
                                    $106.63
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                                                    <span class="inline-flex items-center gap-1 text-xs font-semibold text-gain">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
</svg>
                                        +0.00%
                                    </span>
                                                            </td>
                            
                            <td class="px-4 py-3">
                                <span class="px-2 py-0.5 text-[10px] font-medium rounded-full bg-surface-overlay text-content-secondary capitalize">
                                    crypto
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <a href="{{ route('user.trade') }}?asset=89"
                                   class="inline-flex items-center gap-1 px-3 py-1.5 text-xs font-medium rounded-lg bg-primary hover:bg-primary-dark text-content-inverse transition-colors opacity-0 group-hover:opacity-100 focus:opacity-100">
                                    Trade
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
</svg>
                                </a>
                            </td>
                        </tr>
                                            <tr class="hover:bg-surface-overlay/50 transition-colors group">
                            
                            <td class="px-4 py-3">
                                <div class="flex items-center gap-3">
                                                                            <img src="https://coin-images.coingecko.com/coins/images/70445/large/JTRSY.png?1762078582" alt="" class="w-8 h-8 rounded-full bg-surface-overlay" loading="lazy">
                                                                        <div>
                                        <span class="text-sm font-semibold text-content-primary">Janus Henderson Anemoy Treasury Fund</span>
                                                                                    <span class="text-xs text-content-tertiary ml-1">JTRSY</span>
                                                                            </div>
                                </div>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <span class="text-sm font-medium text-content-primary">
                                    $1.11
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                                                    <span class="inline-flex items-center gap-1 text-xs font-semibold text-gain">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
</svg>
                                        +0.01%
                                    </span>
                                                            </td>
                            
                            <td class="px-4 py-3">
                                <span class="px-2 py-0.5 text-[10px] font-medium rounded-full bg-surface-overlay text-content-secondary capitalize">
                                    crypto
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <a href="{{ route('user.trade') }}?asset=90"
                                   class="inline-flex items-center gap-1 px-3 py-1.5 text-xs font-medium rounded-lg bg-primary hover:bg-primary-dark text-content-inverse transition-colors opacity-0 group-hover:opacity-100 focus:opacity-100">
                                    Trade
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
</svg>
                                </a>
                            </td>
                        </tr>
                                            <tr class="hover:bg-surface-overlay/50 transition-colors group">
                            
                            <td class="px-4 py-3">
                                <div class="flex items-center gap-3">
                                                                            <img src="https://coin-images.coingecko.com/coins/images/102172077/large/USDGO_%287%29.png?1771437018" alt="" class="w-8 h-8 rounded-full bg-surface-overlay" loading="lazy">
                                                                        <div>
                                        <span class="text-sm font-semibold text-content-primary">USDGO</span>
                                                                                    <span class="text-xs text-content-tertiary ml-1">USDGO</span>
                                                                            </div>
                                </div>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <span class="text-sm font-medium text-content-primary">
                                    $1.00
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                                                    <span class="inline-flex items-center gap-1 text-xs font-semibold text-gain">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
</svg>
                                        +0.02%
                                    </span>
                                                            </td>
                            
                            <td class="px-4 py-3">
                                <span class="px-2 py-0.5 text-[10px] font-medium rounded-full bg-surface-overlay text-content-secondary capitalize">
                                    crypto
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <a href="{{ route('user.trade') }}?asset=91"
                                   class="inline-flex items-center gap-1 px-3 py-1.5 text-xs font-medium rounded-lg bg-primary hover:bg-primary-dark text-content-inverse transition-colors opacity-0 group-hover:opacity-100 focus:opacity-100">
                                    Trade
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
</svg>
                                </a>
                            </td>
                        </tr>
                                            <tr class="hover:bg-surface-overlay/50 transition-colors group">
                            
                            <td class="px-4 py-3">
                                <div class="flex items-center gap-3">
                                                                            <img src="https://coin-images.coingecko.com/coins/images/35012/large/Invesco_icon_lg.png?1780816895" alt="" class="w-8 h-8 rounded-full bg-surface-overlay" loading="lazy">
                                                                        <div>
                                        <span class="text-sm font-semibold text-content-primary">Invesco Short Duration US Government Securities Fund</span>
                                                                                    <span class="text-xs text-content-tertiary ml-1">USTB</span>
                                                                            </div>
                                </div>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <span class="text-sm font-medium text-content-primary">
                                    $11.14
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                                                    <span class="inline-flex items-center gap-1 text-xs font-semibold text-gain">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
</svg>
                                        +0.01%
                                    </span>
                                                            </td>
                            
                            <td class="px-4 py-3">
                                <span class="px-2 py-0.5 text-[10px] font-medium rounded-full bg-surface-overlay text-content-secondary capitalize">
                                    crypto
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <a href="{{ route('user.trade') }}?asset=92"
                                   class="inline-flex items-center gap-1 px-3 py-1.5 text-xs font-medium rounded-lg bg-primary hover:bg-primary-dark text-content-inverse transition-colors opacity-0 group-hover:opacity-100 focus:opacity-100">
                                    Trade
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
</svg>
                                </a>
                            </td>
                        </tr>
                                            <tr class="hover:bg-surface-overlay/50 transition-colors group">
                            
                            <td class="px-4 py-3">
                                <div class="flex items-center gap-3">
                                                                            <img src="https://coin-images.coingecko.com/coins/images/102172591/large/Fund_eurSAF0.png?1774104814" alt="" class="w-8 h-8 rounded-full bg-surface-overlay" loading="lazy">
                                                                        <div>
                                        <span class="text-sm font-semibold text-content-primary">Spiko Amundi Overnight Swap Fund (EUR)</span>
                                                                                    <span class="text-xs text-content-tertiary ml-1">EURSAFO</span>
                                                                            </div>
                                </div>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <span class="text-sm font-medium text-content-primary">
                                    $1.15
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                                                    <span class="inline-flex items-center gap-1 text-xs font-semibold text-gain">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
</svg>
                                        +0.23%
                                    </span>
                                                            </td>
                            
                            <td class="px-4 py-3">
                                <span class="px-2 py-0.5 text-[10px] font-medium rounded-full bg-surface-overlay text-content-secondary capitalize">
                                    crypto
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <a href="{{ route('user.trade') }}?asset=93"
                                   class="inline-flex items-center gap-1 px-3 py-1.5 text-xs font-medium rounded-lg bg-primary hover:bg-primary-dark text-content-inverse transition-colors opacity-0 group-hover:opacity-100 focus:opacity-100">
                                    Trade
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
</svg>
                                </a>
                            </td>
                        </tr>
                                            <tr class="hover:bg-surface-overlay/50 transition-colors group">
                            
                            <td class="px-4 py-3">
                                <div class="flex items-center gap-3">
                                                                            <img src="https://coin-images.coingecko.com/coins/images/70446/large/jaaa.png?1762078666" alt="" class="w-8 h-8 rounded-full bg-surface-overlay" loading="lazy">
                                                                        <div>
                                        <span class="text-sm font-semibold text-content-primary">Janus Henderson Anemoy AAA CLO Fund</span>
                                                                                    <span class="text-xs text-content-tertiary ml-1">JAAA</span>
                                                                            </div>
                                </div>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <span class="text-sm font-medium text-content-primary">
                                    $1.04
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                                                    <span class="inline-flex items-center gap-1 text-xs font-semibold text-gain">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
</svg>
                                        +0.02%
                                    </span>
                                                            </td>
                            
                            <td class="px-4 py-3">
                                <span class="px-2 py-0.5 text-[10px] font-medium rounded-full bg-surface-overlay text-content-secondary capitalize">
                                    crypto
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <a href="{{ route('user.trade') }}?asset=94"
                                   class="inline-flex items-center gap-1 px-3 py-1.5 text-xs font-medium rounded-lg bg-primary hover:bg-primary-dark text-content-inverse transition-colors opacity-0 group-hover:opacity-100 focus:opacity-100">
                                    Trade
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
</svg>
                                </a>
                            </td>
                        </tr>
                                            <tr class="hover:bg-surface-overlay/50 transition-colors group">
                            
                            <td class="px-4 py-3">
                                <div class="flex items-center gap-3">
                                                                            <img src="https://coin-images.coingecko.com/coins/images/29023/large/OUSG.png?1696527993" alt="" class="w-8 h-8 rounded-full bg-surface-overlay" loading="lazy">
                                                                        <div>
                                        <span class="text-sm font-semibold text-content-primary">Ondo Short-Term U.S. Government Bond Fund</span>
                                                                                    <span class="text-xs text-content-tertiary ml-1">OUSG</span>
                                                                            </div>
                                </div>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <span class="text-sm font-medium text-content-primary">
                                    $115.83
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                                                    <span class="inline-flex items-center gap-1 text-xs font-semibold text-gain">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
</svg>
                                        +0.01%
                                    </span>
                                                            </td>
                            
                            <td class="px-4 py-3">
                                <span class="px-2 py-0.5 text-[10px] font-medium rounded-full bg-surface-overlay text-content-secondary capitalize">
                                    crypto
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <a href="{{ route('user.trade') }}?asset=95"
                                   class="inline-flex items-center gap-1 px-3 py-1.5 text-xs font-medium rounded-lg bg-primary hover:bg-primary-dark text-content-inverse transition-colors opacity-0 group-hover:opacity-100 focus:opacity-100">
                                    Trade
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
</svg>
                                </a>
                            </td>
                        </tr>
                                            <tr class="hover:bg-surface-overlay/50 transition-colors group">
                            
                            <td class="px-4 py-3">
                                <div class="flex items-center gap-3">
                                                                            <img src="https://coin-images.coingecko.com/coins/images/102172243/large/apxUSD.png?1772448502" alt="" class="w-8 h-8 rounded-full bg-surface-overlay" loading="lazy">
                                                                        <div>
                                        <span class="text-sm font-semibold text-content-primary">apxUSD</span>
                                                                                    <span class="text-xs text-content-tertiary ml-1">APXUSD</span>
                                                                            </div>
                                </div>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <span class="text-sm font-medium text-content-primary">
                                    $0.86
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                                                    <span class="inline-flex items-center gap-1 text-xs font-semibold text-gain">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
</svg>
                                        +2.23%
                                    </span>
                                                            </td>
                            
                            <td class="px-4 py-3">
                                <span class="px-2 py-0.5 text-[10px] font-medium rounded-full bg-surface-overlay text-content-secondary capitalize">
                                    crypto
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <a href="{{ route('user.trade') }}?asset=96"
                                   class="inline-flex items-center gap-1 px-3 py-1.5 text-xs font-medium rounded-lg bg-primary hover:bg-primary-dark text-content-inverse transition-colors opacity-0 group-hover:opacity-100 focus:opacity-100">
                                    Trade
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
</svg>
                                </a>
                            </td>
                        </tr>
                                            <tr class="hover:bg-surface-overlay/50 transition-colors group">
                            
                            <td class="px-4 py-3">
                                <div class="flex items-center gap-3">
                                                                            <img src="https://coin-images.coingecko.com/coins/images/102172338/large/photo_2024-11-02_22-15-38.jpg?1772958557" alt="" class="w-8 h-8 rounded-full bg-surface-overlay" loading="lazy">
                                                                        <div>
                                        <span class="text-sm font-semibold text-content-primary">Peanut</span>
                                                                                    <span class="text-xs text-content-tertiary ml-1">PEANUT</span>
                                                                            </div>
                                </div>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <span class="text-sm font-medium text-content-primary">
                                    $0.00
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                                                    <span class="text-xs text-content-tertiary">—</span>
                                                            </td>
                            
                            <td class="px-4 py-3">
                                <span class="px-2 py-0.5 text-[10px] font-medium rounded-full bg-surface-overlay text-content-secondary capitalize">
                                    crypto
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <a href="{{ route('user.trade') }}?asset=97"
                                   class="inline-flex items-center gap-1 px-3 py-1.5 text-xs font-medium rounded-lg bg-primary hover:bg-primary-dark text-content-inverse transition-colors opacity-0 group-hover:opacity-100 focus:opacity-100">
                                    Trade
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
</svg>
                                </a>
                            </td>
                        </tr>
                                            <tr class="hover:bg-surface-overlay/50 transition-colors group">
                            
                            <td class="px-4 py-3">
                                <div class="flex items-center gap-3">
                                                                            <img src="https://coin-images.coingecko.com/coins/images/66150/large/tradable.jpg?1748488921" alt="" class="w-8 h-8 rounded-full bg-surface-overlay" loading="lazy">
                                                                        <div>
                                        <span class="text-sm font-semibold text-content-primary">Tradable NA Rent Financing Platform SSTN</span>
                                                                                    <span class="text-xs text-content-tertiary ml-1">PC0000031</span>
                                                                            </div>
                                </div>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <span class="text-sm font-medium text-content-primary">
                                    $1.00
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                                                    <span class="inline-flex items-center gap-1 text-xs font-semibold text-gain">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
</svg>
                                        +0.00%
                                    </span>
                                                            </td>
                            
                            <td class="px-4 py-3">
                                <span class="px-2 py-0.5 text-[10px] font-medium rounded-full bg-surface-overlay text-content-secondary capitalize">
                                    crypto
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <a href="{{ route('user.trade') }}?asset=98"
                                   class="inline-flex items-center gap-1 px-3 py-1.5 text-xs font-medium rounded-lg bg-primary hover:bg-primary-dark text-content-inverse transition-colors opacity-0 group-hover:opacity-100 focus:opacity-100">
                                    Trade
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
</svg>
                                </a>
                            </td>
                        </tr>
                                            <tr class="hover:bg-surface-overlay/50 transition-colors group">
                            
                            <td class="px-4 py-3">
                                <div class="flex items-center gap-3">
                                                                            <img src="https://coin-images.coingecko.com/coins/images/102173233/large/nexus.jpg?1778490588" alt="" class="w-8 h-8 rounded-full bg-surface-overlay" loading="lazy">
                                                                        <div>
                                        <span class="text-sm font-semibold text-content-primary">Nexus</span>
                                                                                    <span class="text-xs text-content-tertiary ml-1">NEX</span>
                                                                            </div>
                                </div>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <span class="text-sm font-medium text-content-primary">
                                    $0.00
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                                                    <span class="inline-flex items-center gap-1 text-xs font-semibold text-gain">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
</svg>
                                        +27.97%
                                    </span>
                                                            </td>
                            
                            <td class="px-4 py-3">
                                <span class="px-2 py-0.5 text-[10px] font-medium rounded-full bg-surface-overlay text-content-secondary capitalize">
                                    crypto
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <a href="{{ route('user.trade') }}?asset=99"
                                   class="inline-flex items-center gap-1 px-3 py-1.5 text-xs font-medium rounded-lg bg-primary hover:bg-primary-dark text-content-inverse transition-colors opacity-0 group-hover:opacity-100 focus:opacity-100">
                                    Trade
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
</svg>
                                </a>
                            </td>
                        </tr>
                                            <tr class="hover:bg-surface-overlay/50 transition-colors group">
                            
                            <td class="px-4 py-3">
                                <div class="flex items-center gap-3">
                                                                            <img src="https://coin-images.coingecko.com/coins/images/71792/large/usat_logo_200x200.png?1769440161" alt="" class="w-8 h-8 rounded-full bg-surface-overlay" loading="lazy">
                                                                        <div>
                                        <span class="text-sm font-semibold text-content-primary">USAT</span>
                                                                                    <span class="text-xs text-content-tertiary ml-1">USAT</span>
                                                                            </div>
                                </div>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <span class="text-sm font-medium text-content-primary">
                                    $1.00
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                                                    <span class="inline-flex items-center gap-1 text-xs font-semibold text-gain">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
</svg>
                                        +0.02%
                                    </span>
                                                            </td>
                            
                            <td class="px-4 py-3">
                                <span class="px-2 py-0.5 text-[10px] font-medium rounded-full bg-surface-overlay text-content-secondary capitalize">
                                    crypto
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <a href="{{ route('user.trade') }}?asset=100"
                                   class="inline-flex items-center gap-1 px-3 py-1.5 text-xs font-medium rounded-lg bg-primary hover:bg-primary-dark text-content-inverse transition-colors opacity-0 group-hover:opacity-100 focus:opacity-100">
                                    Trade
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
</svg>
                                </a>
                            </td>
                        </tr>
                                            <tr class="hover:bg-surface-overlay/50 transition-colors group">
                            
                            <td class="px-4 py-3">
                                <div class="flex items-center gap-3">
                                                                            <img src="https://coin-images.coingecko.com/coins/images/39666/large/USTB.png?1723541269" alt="" class="w-8 h-8 rounded-full bg-surface-overlay" loading="lazy">
                                                                        <div>
                                        <span class="text-sm font-semibold text-content-primary">Spiko US T-Bills Money Market Fund</span>
                                                                                    <span class="text-xs text-content-tertiary ml-1">USTBL</span>
                                                                            </div>
                                </div>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <span class="text-sm font-medium text-content-primary">
                                    $1.09
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                                                    <span class="inline-flex items-center gap-1 text-xs font-semibold text-gain">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
</svg>
                                        +0.01%
                                    </span>
                                                            </td>
                            
                            <td class="px-4 py-3">
                                <span class="px-2 py-0.5 text-[10px] font-medium rounded-full bg-surface-overlay text-content-secondary capitalize">
                                    crypto
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <a href="{{ route('user.trade') }}?asset=101"
                                   class="inline-flex items-center gap-1 px-3 py-1.5 text-xs font-medium rounded-lg bg-primary hover:bg-primary-dark text-content-inverse transition-colors opacity-0 group-hover:opacity-100 focus:opacity-100">
                                    Trade
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
</svg>
                                </a>
                            </td>
                        </tr>
                                            <tr class="hover:bg-surface-overlay/50 transition-colors group">
                            
                            <td class="px-4 py-3">
                                <div class="flex items-center gap-3">
                                                                            <img src="https://coin-images.coingecko.com/coins/images/102172616/large/edgex.png?1774332310" alt="" class="w-8 h-8 rounded-full bg-surface-overlay" loading="lazy">
                                                                        <div>
                                        <span class="text-sm font-semibold text-content-primary">edgeX</span>
                                                                                    <span class="text-xs text-content-tertiary ml-1">EDGE</span>
                                                                            </div>
                                </div>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <span class="text-sm font-medium text-content-primary">
                                    $0.49
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                                                    <span class="inline-flex items-center gap-1 text-xs font-semibold text-gain">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
</svg>
                                        +1.79%
                                    </span>
                                                            </td>
                            
                            <td class="px-4 py-3">
                                <span class="px-2 py-0.5 text-[10px] font-medium rounded-full bg-surface-overlay text-content-secondary capitalize">
                                    crypto
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <a href="{{ route('user.trade') }}?asset=102"
                                   class="inline-flex items-center gap-1 px-3 py-1.5 text-xs font-medium rounded-lg bg-primary hover:bg-primary-dark text-content-inverse transition-colors opacity-0 group-hover:opacity-100 focus:opacity-100">
                                    Trade
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
</svg>
                                </a>
                            </td>
                        </tr>
                                            <tr class="hover:bg-surface-overlay/50 transition-colors group">
                            
                            <td class="px-4 py-3">
                                <div class="flex items-center gap-3">
                                                                            <img src="https://coin-images.coingecko.com/coins/images/66798/large/tradable.jpg?1750576460" alt="" class="w-8 h-8 rounded-full bg-surface-overlay" loading="lazy">
                                                                        <div>
                                        <span class="text-sm font-semibold text-content-primary">Tradable APAC Diversified Finance Provider SSTN</span>
                                                                                    <span class="text-xs text-content-tertiary ml-1">PC0000033</span>
                                                                            </div>
                                </div>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <span class="text-sm font-medium text-content-primary">
                                    $1.00
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                                                    <span class="inline-flex items-center gap-1 text-xs font-semibold text-gain">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
</svg>
                                        +0.00%
                                    </span>
                                                            </td>
                            
                            <td class="px-4 py-3">
                                <span class="px-2 py-0.5 text-[10px] font-medium rounded-full bg-surface-overlay text-content-secondary capitalize">
                                    crypto
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <a href="{{ route('user.trade') }}?asset=103"
                                   class="inline-flex items-center gap-1 px-3 py-1.5 text-xs font-medium rounded-lg bg-primary hover:bg-primary-dark text-content-inverse transition-colors opacity-0 group-hover:opacity-100 focus:opacity-100">
                                    Trade
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
</svg>
                                </a>
                            </td>
                        </tr>
                                            <tr class="hover:bg-surface-overlay/50 transition-colors group">
                            
                            <td class="px-4 py-3">
                                <div class="flex items-center gap-3">
                                                                            <img src="https://coin-images.coingecko.com/coins/images/102173690/large/spUSDC_%281%29.png?1781003574" alt="" class="w-8 h-8 rounded-full bg-surface-overlay" loading="lazy">
                                                                        <div>
                                        <span class="text-sm font-semibold text-content-primary">Spark USDC</span>
                                                                                    <span class="text-xs text-content-tertiary ml-1">SUSDC</span>
                                                                            </div>
                                </div>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <span class="text-sm font-medium text-content-primary">
                                    $1.10
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                                                    <span class="text-xs text-content-tertiary">—</span>
                                                            </td>
                            
                            <td class="px-4 py-3">
                                <span class="px-2 py-0.5 text-[10px] font-medium rounded-full bg-surface-overlay text-content-secondary capitalize">
                                    crypto
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <a href="{{ route('user.trade') }}?asset=104"
                                   class="inline-flex items-center gap-1 px-3 py-1.5 text-xs font-medium rounded-lg bg-primary hover:bg-primary-dark text-content-inverse transition-colors opacity-0 group-hover:opacity-100 focus:opacity-100">
                                    Trade
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
</svg>
                                </a>
                            </td>
                        </tr>
                                            <tr class="hover:bg-surface-overlay/50 transition-colors group">
                            
                            <td class="px-4 py-3">
                                <div class="flex items-center gap-3">
                                                                            <img src="https://coin-images.coingecko.com/coins/images/102172527/large/apyUSD.png?1773763322" alt="" class="w-8 h-8 rounded-full bg-surface-overlay" loading="lazy">
                                                                        <div>
                                        <span class="text-sm font-semibold text-content-primary">apyUSD</span>
                                                                                    <span class="text-xs text-content-tertiary ml-1">APYUSD</span>
                                                                            </div>
                                </div>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <span class="text-sm font-medium text-content-primary">
                                    $1.19
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                                                    <span class="inline-flex items-center gap-1 text-xs font-semibold text-gain">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
</svg>
                                        +2.53%
                                    </span>
                                                            </td>
                            
                            <td class="px-4 py-3">
                                <span class="px-2 py-0.5 text-[10px] font-medium rounded-full bg-surface-overlay text-content-secondary capitalize">
                                    crypto
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <a href="{{ route('user.trade') }}?asset=105"
                                   class="inline-flex items-center gap-1 px-3 py-1.5 text-xs font-medium rounded-lg bg-primary hover:bg-primary-dark text-content-inverse transition-colors opacity-0 group-hover:opacity-100 focus:opacity-100">
                                    Trade
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
</svg>
                                </a>
                            </td>
                        </tr>
                                            <tr class="hover:bg-surface-overlay/50 transition-colors group">
                            
                            <td class="px-4 py-3">
                                <div class="flex items-center gap-3">
                                                                            <img src="https://coin-images.coingecko.com/coins/images/102172590/large/Fund_usdSAFO.png?1774104804" alt="" class="w-8 h-8 rounded-full bg-surface-overlay" loading="lazy">
                                                                        <div>
                                        <span class="text-sm font-semibold text-content-primary">Spiko Amundi Overnight Swap Fund</span>
                                                                                    <span class="text-xs text-content-tertiary ml-1">SAFO</span>
                                                                            </div>
                                </div>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <span class="text-sm font-medium text-content-primary">
                                    $1.01
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                                                    <span class="inline-flex items-center gap-1 text-xs font-semibold text-gain">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
</svg>
                                        +0.01%
                                    </span>
                                                            </td>
                            
                            <td class="px-4 py-3">
                                <span class="px-2 py-0.5 text-[10px] font-medium rounded-full bg-surface-overlay text-content-secondary capitalize">
                                    crypto
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <a href="{{ route('user.trade') }}?asset=106"
                                   class="inline-flex items-center gap-1 px-3 py-1.5 text-xs font-medium rounded-lg bg-primary hover:bg-primary-dark text-content-inverse transition-colors opacity-0 group-hover:opacity-100 focus:opacity-100">
                                    Trade
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
</svg>
                                </a>
                            </td>
                        </tr>
                                            <tr class="hover:bg-surface-overlay/50 transition-colors group">
                            
                            <td class="px-4 py-3">
                                <div class="flex items-center gap-3">
                                                                            <img src="https://coin-images.coingecko.com/coins/images/102171961/large/image_%285%29.png?1774269858" alt="" class="w-8 h-8 rounded-full bg-surface-overlay" loading="lazy">
                                                                        <div>
                                        <span class="text-sm font-semibold text-content-primary">Backpack</span>
                                                                                    <span class="text-xs text-content-tertiary ml-1">BP</span>
                                                                            </div>
                                </div>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <span class="text-sm font-medium text-content-primary">
                                    $0.55
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                                                    <span class="inline-flex items-center gap-1 text-xs font-semibold text-loss">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6 9 12.75l6.75-6.75M2.25 12.75 9 19.5l6.75-6.75" />
</svg>
                                        -2.83%
                                    </span>
                                                            </td>
                            
                            <td class="px-4 py-3">
                                <span class="px-2 py-0.5 text-[10px] font-medium rounded-full bg-surface-overlay text-content-secondary capitalize">
                                    crypto
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <a href="{{ route('user.trade') }}?asset=107"
                                   class="inline-flex items-center gap-1 px-3 py-1.5 text-xs font-medium rounded-lg bg-primary hover:bg-primary-dark text-content-inverse transition-colors opacity-0 group-hover:opacity-100 focus:opacity-100">
                                    Trade
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
</svg>
                                </a>
                            </td>
                        </tr>
                                            <tr class="hover:bg-surface-overlay/50 transition-colors group">
                            
                            <td class="px-4 py-3">
                                <div class="flex items-center gap-3">
                                                                            <img src="https://coin-images.coingecko.com/coins/images/66796/large/tradable.jpg?1750576421" alt="" class="w-8 h-8 rounded-full bg-surface-overlay" loading="lazy">
                                                                        <div>
                                        <span class="text-sm font-semibold text-content-primary">Tradable LatAm Fintech SSTN</span>
                                                                                    <span class="text-xs text-content-tertiary ml-1">PC0000097</span>
                                                                            </div>
                                </div>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <span class="text-sm font-medium text-content-primary">
                                    $1.00
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                                                    <span class="inline-flex items-center gap-1 text-xs font-semibold text-gain">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
</svg>
                                        +0.00%
                                    </span>
                                                            </td>
                            
                            <td class="px-4 py-3">
                                <span class="px-2 py-0.5 text-[10px] font-medium rounded-full bg-surface-overlay text-content-secondary capitalize">
                                    crypto
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <a href="{{ route('user.trade') }}?asset=108"
                                   class="inline-flex items-center gap-1 px-3 py-1.5 text-xs font-medium rounded-lg bg-primary hover:bg-primary-dark text-content-inverse transition-colors opacity-0 group-hover:opacity-100 focus:opacity-100">
                                    Trade
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
</svg>
                                </a>
                            </td>
                        </tr>
                                            <tr class="hover:bg-surface-overlay/50 transition-colors group">
                            
                            <td class="px-4 py-3">
                                <div class="flex items-center gap-3">
                                                                            <img src="https://coin-images.coingecko.com/coins/images/102172835/large/earnETH.png?1776152041" alt="" class="w-8 h-8 rounded-full bg-surface-overlay" loading="lazy">
                                                                        <div>
                                        <span class="text-sm font-semibold text-content-primary">Lido Earn ETH</span>
                                                                                    <span class="text-xs text-content-tertiary ml-1">EARNETH</span>
                                                                            </div>
                                </div>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <span class="text-sm font-medium text-content-primary">
                                    $1,772.40
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                                                    <span class="inline-flex items-center gap-1 text-xs font-semibold text-gain">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
</svg>
                                        +1.03%
                                    </span>
                                                            </td>
                            
                            <td class="px-4 py-3">
                                <span class="px-2 py-0.5 text-[10px] font-medium rounded-full bg-surface-overlay text-content-secondary capitalize">
                                    crypto
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <a href="{{ route('user.trade') }}?asset=109"
                                   class="inline-flex items-center gap-1 px-3 py-1.5 text-xs font-medium rounded-lg bg-primary hover:bg-primary-dark text-content-inverse transition-colors opacity-0 group-hover:opacity-100 focus:opacity-100">
                                    Trade
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
</svg>
                                </a>
                            </td>
                        </tr>
                                            <tr class="hover:bg-surface-overlay/50 transition-colors group">
                            
                            <td class="px-4 py-3">
                                <div class="flex items-center gap-3">
                                                                            <img src="https://coin-images.coingecko.com/coins/images/102174035/large/IMG_9497.jpeg?1782005339" alt="" class="w-8 h-8 rounded-full bg-surface-overlay" loading="lazy">
                                                                        <div>
                                        <span class="text-sm font-semibold text-content-primary">The Black Bull</span>
                                                                                    <span class="text-xs text-content-tertiary ml-1">ANSEM</span>
                                                                            </div>
                                </div>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <span class="text-sm font-medium text-content-primary">
                                    $0.30
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                                                    <span class="inline-flex items-center gap-1 text-xs font-semibold text-gain">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
</svg>
                                        +1.27%
                                    </span>
                                                            </td>
                            
                            <td class="px-4 py-3">
                                <span class="px-2 py-0.5 text-[10px] font-medium rounded-full bg-surface-overlay text-content-secondary capitalize">
                                    crypto
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <a href="{{ route('user.trade') }}?asset=110"
                                   class="inline-flex items-center gap-1 px-3 py-1.5 text-xs font-medium rounded-lg bg-primary hover:bg-primary-dark text-content-inverse transition-colors opacity-0 group-hover:opacity-100 focus:opacity-100">
                                    Trade
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
</svg>
                                </a>
                            </td>
                        </tr>
                                            <tr class="hover:bg-surface-overlay/50 transition-colors group">
                            
                            <td class="px-4 py-3">
                                <div class="flex items-center gap-3">
                                                                            <img src="https://coin-images.coingecko.com/coins/images/71660/large/genius.png?1768804210" alt="" class="w-8 h-8 rounded-full bg-surface-overlay" loading="lazy">
                                                                        <div>
                                        <span class="text-sm font-semibold text-content-primary">Genius</span>
                                                                                    <span class="text-xs text-content-tertiary ml-1">GENIUS</span>
                                                                            </div>
                                </div>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <span class="text-sm font-medium text-content-primary">
                                    $0.35
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                                                    <span class="inline-flex items-center gap-1 text-xs font-semibold text-loss">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6 9 12.75l6.75-6.75M2.25 12.75 9 19.5l6.75-6.75" />
</svg>
                                        -3.83%
                                    </span>
                                                            </td>
                            
                            <td class="px-4 py-3">
                                <span class="px-2 py-0.5 text-[10px] font-medium rounded-full bg-surface-overlay text-content-secondary capitalize">
                                    crypto
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <a href="{{ route('user.trade') }}?asset=111"
                                   class="inline-flex items-center gap-1 px-3 py-1.5 text-xs font-medium rounded-lg bg-primary hover:bg-primary-dark text-content-inverse transition-colors opacity-0 group-hover:opacity-100 focus:opacity-100">
                                    Trade
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
</svg>
                                </a>
                            </td>
                        </tr>
                                            <tr class="hover:bg-surface-overlay/50 transition-colors group">
                            
                            <td class="px-4 py-3">
                                <div class="flex items-center gap-3">
                                                                            <img src="https://coin-images.coingecko.com/coins/images/102173580/large/pearl.png?1780324634" alt="" class="w-8 h-8 rounded-full bg-surface-overlay" loading="lazy">
                                                                        <div>
                                        <span class="text-sm font-semibold text-content-primary">Pearl</span>
                                                                                    <span class="text-xs text-content-tertiary ml-1">PRL</span>
                                                                            </div>
                                </div>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <span class="text-sm font-medium text-content-primary">
                                    $0.48
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                                                    <span class="inline-flex items-center gap-1 text-xs font-semibold text-gain">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
</svg>
                                        +2.16%
                                    </span>
                                                            </td>
                            
                            <td class="px-4 py-3">
                                <span class="px-2 py-0.5 text-[10px] font-medium rounded-full bg-surface-overlay text-content-secondary capitalize">
                                    crypto
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <a href="{{ route('user.trade') }}?asset=112"
                                   class="inline-flex items-center gap-1 px-3 py-1.5 text-xs font-medium rounded-lg bg-primary hover:bg-primary-dark text-content-inverse transition-colors opacity-0 group-hover:opacity-100 focus:opacity-100">
                                    Trade
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
</svg>
                                </a>
                            </td>
                        </tr>
                                            <tr class="hover:bg-surface-overlay/50 transition-colors group">
                            
                            <td class="px-4 py-3">
                                <div class="flex items-center gap-3">
                                                                            <img src="https://coin-images.coingecko.com/coins/images/54809/large/ACRED.png?1741801356" alt="" class="w-8 h-8 rounded-full bg-surface-overlay" loading="lazy">
                                                                        <div>
                                        <span class="text-sm font-semibold text-content-primary">Apollo Diversified Credit Securitize Fund</span>
                                                                                    <span class="text-xs text-content-tertiary ml-1">ACRED</span>
                                                                            </div>
                                </div>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <span class="text-sm font-medium text-content-primary">
                                    $1,103.34
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                                                    <span class="inline-flex items-center gap-1 text-xs font-semibold text-gain">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
</svg>
                                        +0.03%
                                    </span>
                                                            </td>
                            
                            <td class="px-4 py-3">
                                <span class="px-2 py-0.5 text-[10px] font-medium rounded-full bg-surface-overlay text-content-secondary capitalize">
                                    crypto
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <a href="{{ route('user.trade') }}?asset=113"
                                   class="inline-flex items-center gap-1 px-3 py-1.5 text-xs font-medium rounded-lg bg-primary hover:bg-primary-dark text-content-inverse transition-colors opacity-0 group-hover:opacity-100 focus:opacity-100">
                                    Trade
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
</svg>
                                </a>
                            </td>
                        </tr>
                                            <tr class="hover:bg-surface-overlay/50 transition-colors group">
                            
                            <td class="px-4 py-3">
                                <div class="flex items-center gap-3">
                                                                            <img src="https://coin-images.coingecko.com/coins/images/66954/large/tradable.jpg?1751254449" alt="" class="w-8 h-8 rounded-full bg-surface-overlay" loading="lazy">
                                                                        <div>
                                        <span class="text-sm font-semibold text-content-primary">Tradable Singapore Fintech SSL</span>
                                                                                    <span class="text-xs text-content-tertiary ml-1">PC0000023</span>
                                                                            </div>
                                </div>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <span class="text-sm font-medium text-content-primary">
                                    $1.00
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                                                    <span class="inline-flex items-center gap-1 text-xs font-semibold text-gain">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
</svg>
                                        +0.00%
                                    </span>
                                                            </td>
                            
                            <td class="px-4 py-3">
                                <span class="px-2 py-0.5 text-[10px] font-medium rounded-full bg-surface-overlay text-content-secondary capitalize">
                                    crypto
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <a href="{{ route('user.trade') }}?asset=114"
                                   class="inline-flex items-center gap-1 px-3 py-1.5 text-xs font-medium rounded-lg bg-primary hover:bg-primary-dark text-content-inverse transition-colors opacity-0 group-hover:opacity-100 focus:opacity-100">
                                    Trade
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
</svg>
                                </a>
                            </td>
                        </tr>
                                            <tr class="hover:bg-surface-overlay/50 transition-colors group">
                            
                            <td class="px-4 py-3">
                                <div class="flex items-center gap-3">
                                                                            <img src="https://coin-images.coingecko.com/coins/images/66880/large/tradable.jpg?1750921859" alt="" class="w-8 h-8 rounded-full bg-surface-overlay" loading="lazy">
                                                                        <div>
                                        <span class="text-sm font-semibold text-content-primary">Tradable NA Third Party Online Merchant SSTN</span>
                                                                                    <span class="text-xs text-content-tertiary ml-1">PC0000015</span>
                                                                            </div>
                                </div>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <span class="text-sm font-medium text-content-primary">
                                    $1.00
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                                                    <span class="inline-flex items-center gap-1 text-xs font-semibold text-gain">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
</svg>
                                        +0.00%
                                    </span>
                                                            </td>
                            
                            <td class="px-4 py-3">
                                <span class="px-2 py-0.5 text-[10px] font-medium rounded-full bg-surface-overlay text-content-secondary capitalize">
                                    crypto
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <a href="{{ route('user.trade') }}?asset=115"
                                   class="inline-flex items-center gap-1 px-3 py-1.5 text-xs font-medium rounded-lg bg-primary hover:bg-primary-dark text-content-inverse transition-colors opacity-0 group-hover:opacity-100 focus:opacity-100">
                                    Trade
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
</svg>
                                </a>
                            </td>
                        </tr>
                                            <tr class="hover:bg-surface-overlay/50 transition-colors group">
                            
                            <td class="px-4 py-3">
                                <div class="flex items-center gap-3">
                                                                            <img src="https://coin-images.coingecko.com/coins/images/66877/large/tradable.jpg?1750921571" alt="" class="w-8 h-8 rounded-full bg-surface-overlay" loading="lazy">
                                                                        <div>
                                        <span class="text-sm font-semibold text-content-primary">Tradable LatAm Middle-Market Lender SSTL</span>
                                                                                    <span class="text-xs text-content-tertiary ml-1">PC0000085</span>
                                                                            </div>
                                </div>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <span class="text-sm font-medium text-content-primary">
                                    $1.00
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                                                    <span class="inline-flex items-center gap-1 text-xs font-semibold text-gain">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
</svg>
                                        +0.00%
                                    </span>
                                                            </td>
                            
                            <td class="px-4 py-3">
                                <span class="px-2 py-0.5 text-[10px] font-medium rounded-full bg-surface-overlay text-content-secondary capitalize">
                                    crypto
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <a href="{{ route('user.trade') }}?asset=116"
                                   class="inline-flex items-center gap-1 px-3 py-1.5 text-xs font-medium rounded-lg bg-primary hover:bg-primary-dark text-content-inverse transition-colors opacity-0 group-hover:opacity-100 focus:opacity-100">
                                    Trade
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
</svg>
                                </a>
                            </td>
                        </tr>
                                            <tr class="hover:bg-surface-overlay/50 transition-colors group">
                            
                            <td class="px-4 py-3">
                                <div class="flex items-center gap-3">
                                                                            <img src="https://coin-images.coingecko.com/coins/images/71167/large/stac_logo.png?1766163743" alt="" class="w-8 h-8 rounded-full bg-surface-overlay" loading="lazy">
                                                                        <div>
                                        <span class="text-sm font-semibold text-content-primary">Securitize Tokenized AAA CLO Fund</span>
                                                                                    <span class="text-xs text-content-tertiary ml-1">STAC</span>
                                                                            </div>
                                </div>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <span class="text-sm font-medium text-content-primary">
                                    $1,022.98
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                                                    <span class="inline-flex items-center gap-1 text-xs font-semibold text-gain">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
</svg>
                                        +0.02%
                                    </span>
                                                            </td>
                            
                            <td class="px-4 py-3">
                                <span class="px-2 py-0.5 text-[10px] font-medium rounded-full bg-surface-overlay text-content-secondary capitalize">
                                    crypto
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <a href="{{ route('user.trade') }}?asset=117"
                                   class="inline-flex items-center gap-1 px-3 py-1.5 text-xs font-medium rounded-lg bg-primary hover:bg-primary-dark text-content-inverse transition-colors opacity-0 group-hover:opacity-100 focus:opacity-100">
                                    Trade
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
</svg>
                                </a>
                            </td>
                        </tr>
                                            <tr class="hover:bg-surface-overlay/50 transition-colors group">
                            
                            <td class="px-4 py-3">
                                <div class="flex items-center gap-3">
                                                                            <img src="https://coin-images.coingecko.com/coins/images/102172645/large/usdat.png?1774503009" alt="" class="w-8 h-8 rounded-full bg-surface-overlay" loading="lazy">
                                                                        <div>
                                        <span class="text-sm font-semibold text-content-primary">Saturn Dollar</span>
                                                                                    <span class="text-xs text-content-tertiary ml-1">USDAT</span>
                                                                            </div>
                                </div>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <span class="text-sm font-medium text-content-primary">
                                    $1.00
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                                                    <span class="inline-flex items-center gap-1 text-xs font-semibold text-loss">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6 9 12.75l6.75-6.75M2.25 12.75 9 19.5l6.75-6.75" />
</svg>
                                        -0.01%
                                    </span>
                                                            </td>
                            
                            <td class="px-4 py-3">
                                <span class="px-2 py-0.5 text-[10px] font-medium rounded-full bg-surface-overlay text-content-secondary capitalize">
                                    crypto
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <a href="{{ route('user.trade') }}?asset=118"
                                   class="inline-flex items-center gap-1 px-3 py-1.5 text-xs font-medium rounded-lg bg-primary hover:bg-primary-dark text-content-inverse transition-colors opacity-0 group-hover:opacity-100 focus:opacity-100">
                                    Trade
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
</svg>
                                </a>
                            </td>
                        </tr>
                                            <tr class="hover:bg-surface-overlay/50 transition-colors group">
                            
                            <td class="px-4 py-3">
                                <div class="flex items-center gap-3">
                                                                            <img src="https://coin-images.coingecko.com/coins/images/66878/large/tradable.jpg?1750921608" alt="" class="w-8 h-8 rounded-full bg-surface-overlay" loading="lazy">
                                                                        <div>
                                        <span class="text-sm font-semibold text-content-primary">Tradable Singapore Fintech SSL</span>
                                                                                    <span class="text-xs text-content-tertiary ml-1">PC0000077</span>
                                                                            </div>
                                </div>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <span class="text-sm font-medium text-content-primary">
                                    $1.00
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                                                    <span class="inline-flex items-center gap-1 text-xs font-semibold text-gain">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
</svg>
                                        +0.00%
                                    </span>
                                                            </td>
                            
                            <td class="px-4 py-3">
                                <span class="px-2 py-0.5 text-[10px] font-medium rounded-full bg-surface-overlay text-content-secondary capitalize">
                                    crypto
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <a href="{{ route('user.trade') }}?asset=119"
                                   class="inline-flex items-center gap-1 px-3 py-1.5 text-xs font-medium rounded-lg bg-primary hover:bg-primary-dark text-content-inverse transition-colors opacity-0 group-hover:opacity-100 focus:opacity-100">
                                    Trade
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
</svg>
                                </a>
                            </td>
                        </tr>
                                            <tr class="hover:bg-surface-overlay/50 transition-colors group">
                            
                            <td class="px-4 py-3">
                                <div class="flex items-center gap-3">
                                                                            <img src="https://coin-images.coingecko.com/coins/images/102172413/large/UUSD.png?1773390929" alt="" class="w-8 h-8 rounded-full bg-surface-overlay" loading="lazy">
                                                                        <div>
                                        <span class="text-sm font-semibold text-content-primary">Unity USD</span>
                                                                                    <span class="text-xs text-content-tertiary ml-1">UUSD</span>
                                                                            </div>
                                </div>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <span class="text-sm font-medium text-content-primary">
                                    $1.00
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                                                    <span class="inline-flex items-center gap-1 text-xs font-semibold text-gain">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
</svg>
                                        +0.00%
                                    </span>
                                                            </td>
                            
                            <td class="px-4 py-3">
                                <span class="px-2 py-0.5 text-[10px] font-medium rounded-full bg-surface-overlay text-content-secondary capitalize">
                                    crypto
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <a href="{{ route('user.trade') }}?asset=120"
                                   class="inline-flex items-center gap-1 px-3 py-1.5 text-xs font-medium rounded-lg bg-primary hover:bg-primary-dark text-content-inverse transition-colors opacity-0 group-hover:opacity-100 focus:opacity-100">
                                    Trade
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
</svg>
                                </a>
                            </td>
                        </tr>
                                            <tr class="hover:bg-surface-overlay/50 transition-colors group">
                            
                            <td class="px-4 py-3">
                                <div class="flex items-center gap-3">
                                                                            <img src="https://coin-images.coingecko.com/coins/images/102172975/large/manadia-1_%282%29.png?1776925950" alt="" class="w-8 h-8 rounded-full bg-surface-overlay" loading="lazy">
                                                                        <div>
                                        <span class="text-sm font-semibold text-content-primary">Manadia</span>
                                                                                    <span class="text-xs text-content-tertiary ml-1">UMXM</span>
                                                                            </div>
                                </div>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <span class="text-sm font-medium text-content-primary">
                                    $2.06
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                                                    <span class="inline-flex items-center gap-1 text-xs font-semibold text-loss">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6 9 12.75l6.75-6.75M2.25 12.75 9 19.5l6.75-6.75" />
</svg>
                                        -6.77%
                                    </span>
                                                            </td>
                            
                            <td class="px-4 py-3">
                                <span class="px-2 py-0.5 text-[10px] font-medium rounded-full bg-surface-overlay text-content-secondary capitalize">
                                    crypto
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <a href="{{ route('user.trade') }}?asset=121"
                                   class="inline-flex items-center gap-1 px-3 py-1.5 text-xs font-medium rounded-lg bg-primary hover:bg-primary-dark text-content-inverse transition-colors opacity-0 group-hover:opacity-100 focus:opacity-100">
                                    Trade
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
</svg>
                                </a>
                            </td>
                        </tr>
                                            <tr class="hover:bg-surface-overlay/50 transition-colors group">
                            
                            <td class="px-4 py-3">
                                <div class="flex items-center gap-3">
                                                                            <img src="https://assets.coingecko.com/coins/images/4713/large/polygon.png" alt="" class="w-8 h-8 rounded-full bg-surface-overlay" loading="lazy">
                                                                        <div>
                                        <span class="text-sm font-semibold text-content-primary">Polygon</span>
                                                                                    <span class="text-xs text-content-tertiary ml-1">MATIC</span>
                                                                            </div>
                                </div>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <span class="text-sm font-medium text-content-primary">
                                    —
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                                                    <span class="text-xs text-content-tertiary">—</span>
                                                            </td>
                            
                            <td class="px-4 py-3">
                                <span class="px-2 py-0.5 text-[10px] font-medium rounded-full bg-surface-overlay text-content-secondary capitalize">
                                    crypto
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <a href="{{ route('user.trade') }}?asset=14"
                                   class="inline-flex items-center gap-1 px-3 py-1.5 text-xs font-medium rounded-lg bg-primary hover:bg-primary-dark text-content-inverse transition-colors opacity-0 group-hover:opacity-100 focus:opacity-100">
                                    Trade
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
</svg>
                                </a>
                            </td>
                        </tr>
                                            <tr class="hover:bg-surface-overlay/50 transition-colors group">
                            
                            <td class="px-4 py-3">
                                <div class="flex items-center gap-3">
                                                                            <img src="https://hatscripts.github.io/circle-flags/flags/au.svg" alt="" class="w-8 h-8 rounded-full bg-surface-overlay" loading="lazy">
                                                                        <div>
                                        <span class="text-sm font-semibold text-content-primary">Australian Dollar / US Dollar</span>
                                                                                    <span class="text-xs text-content-tertiary ml-1">AUD/USD</span>
                                                                            </div>
                                </div>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <span class="text-sm font-medium text-content-primary">
                                    $0.70
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                                                    <span class="inline-flex items-center gap-1 text-xs font-semibold text-gain">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
</svg>
                                        +0.05%
                                    </span>
                                                            </td>
                            
                            <td class="px-4 py-3">
                                <span class="px-2 py-0.5 text-[10px] font-medium rounded-full bg-surface-overlay text-content-secondary capitalize">
                                    forex
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <a href="{{ route('user.trade') }}?asset=19"
                                   class="inline-flex items-center gap-1 px-3 py-1.5 text-xs font-medium rounded-lg bg-primary hover:bg-primary-dark text-content-inverse transition-colors opacity-0 group-hover:opacity-100 focus:opacity-100">
                                    Trade
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
</svg>
                                </a>
                            </td>
                        </tr>
                                            <tr class="hover:bg-surface-overlay/50 transition-colors group">
                            
                            <td class="px-4 py-3">
                                <div class="flex items-center gap-3">
                                                                            <img src="https://hatscripts.github.io/circle-flags/flags/gb.svg" alt="" class="w-8 h-8 rounded-full bg-surface-overlay" loading="lazy">
                                                                        <div>
                                        <span class="text-sm font-semibold text-content-primary">British Pound / Japanese Yen</span>
                                                                                    <span class="text-xs text-content-tertiary ml-1">GBP/JPY</span>
                                                                            </div>
                                </div>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <span class="text-sm font-medium text-content-primary">
                                    $217.73
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                                                    <span class="inline-flex items-center gap-1 text-xs font-semibold text-gain">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
</svg>
                                        +0.06%
                                    </span>
                                                            </td>
                            
                            <td class="px-4 py-3">
                                <span class="px-2 py-0.5 text-[10px] font-medium rounded-full bg-surface-overlay text-content-secondary capitalize">
                                    forex
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <a href="{{ route('user.trade') }}?asset=25"
                                   class="inline-flex items-center gap-1 px-3 py-1.5 text-xs font-medium rounded-lg bg-primary hover:bg-primary-dark text-content-inverse transition-colors opacity-0 group-hover:opacity-100 focus:opacity-100">
                                    Trade
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
</svg>
                                </a>
                            </td>
                        </tr>
                                            <tr class="hover:bg-surface-overlay/50 transition-colors group">
                            
                            <td class="px-4 py-3">
                                <div class="flex items-center gap-3">
                                                                            <img src="https://hatscripts.github.io/circle-flags/flags/gb.svg" alt="" class="w-8 h-8 rounded-full bg-surface-overlay" loading="lazy">
                                                                        <div>
                                        <span class="text-sm font-semibold text-content-primary">British Pound / US Dollar</span>
                                                                                    <span class="text-xs text-content-tertiary ml-1">GBP/USD</span>
                                                                            </div>
                                </div>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <span class="text-sm font-medium text-content-primary">
                                    $1.33
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                                                    <span class="inline-flex items-center gap-1 text-xs font-semibold text-gain">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
</svg>
                                        +0.05%
                                    </span>
                                                            </td>
                            
                            <td class="px-4 py-3">
                                <span class="px-2 py-0.5 text-[10px] font-medium rounded-full bg-surface-overlay text-content-secondary capitalize">
                                    forex
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <a href="{{ route('user.trade') }}?asset=17"
                                   class="inline-flex items-center gap-1 px-3 py-1.5 text-xs font-medium rounded-lg bg-primary hover:bg-primary-dark text-content-inverse transition-colors opacity-0 group-hover:opacity-100 focus:opacity-100">
                                    Trade
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
</svg>
                                </a>
                            </td>
                        </tr>
                                            <tr class="hover:bg-surface-overlay/50 transition-colors group">
                            
                            <td class="px-4 py-3">
                                <div class="flex items-center gap-3">
                                                                            <img src="https://hatscripts.github.io/circle-flags/flags/eu.svg" alt="" class="w-8 h-8 rounded-full bg-surface-overlay" loading="lazy">
                                                                        <div>
                                        <span class="text-sm font-semibold text-content-primary">Euro / British Pound</span>
                                                                                    <span class="text-xs text-content-tertiary ml-1">EUR/GBP</span>
                                                                            </div>
                                </div>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <span class="text-sm font-medium text-content-primary">
                                    $0.86
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                                                    <span class="inline-flex items-center gap-1 text-xs font-semibold text-gain">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
</svg>
                                        +0.02%
                                    </span>
                                                            </td>
                            
                            <td class="px-4 py-3">
                                <span class="px-2 py-0.5 text-[10px] font-medium rounded-full bg-surface-overlay text-content-secondary capitalize">
                                    forex
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <a href="{{ route('user.trade') }}?asset=23"
                                   class="inline-flex items-center gap-1 px-3 py-1.5 text-xs font-medium rounded-lg bg-primary hover:bg-primary-dark text-content-inverse transition-colors opacity-0 group-hover:opacity-100 focus:opacity-100">
                                    Trade
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
</svg>
                                </a>
                            </td>
                        </tr>
                                            <tr class="hover:bg-surface-overlay/50 transition-colors group">
                            
                            <td class="px-4 py-3">
                                <div class="flex items-center gap-3">
                                                                            <img src="https://hatscripts.github.io/circle-flags/flags/eu.svg" alt="" class="w-8 h-8 rounded-full bg-surface-overlay" loading="lazy">
                                                                        <div>
                                        <span class="text-sm font-semibold text-content-primary">Euro / Japanese Yen</span>
                                                                                    <span class="text-xs text-content-tertiary ml-1">EUR/JPY</span>
                                                                            </div>
                                </div>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <span class="text-sm font-medium text-content-primary">
                                    $186.27
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                                                    <span class="inline-flex items-center gap-1 text-xs font-semibold text-gain">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
</svg>
                                        +0.06%
                                    </span>
                                                            </td>
                            
                            <td class="px-4 py-3">
                                <span class="px-2 py-0.5 text-[10px] font-medium rounded-full bg-surface-overlay text-content-secondary capitalize">
                                    forex
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <a href="{{ route('user.trade') }}?asset=24"
                                   class="inline-flex items-center gap-1 px-3 py-1.5 text-xs font-medium rounded-lg bg-primary hover:bg-primary-dark text-content-inverse transition-colors opacity-0 group-hover:opacity-100 focus:opacity-100">
                                    Trade
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
</svg>
                                </a>
                            </td>
                        </tr>
                                            <tr class="hover:bg-surface-overlay/50 transition-colors group">
                            
                            <td class="px-4 py-3">
                                <div class="flex items-center gap-3">
                                                                            <img src="https://hatscripts.github.io/circle-flags/flags/eu.svg" alt="" class="w-8 h-8 rounded-full bg-surface-overlay" loading="lazy">
                                                                        <div>
                                        <span class="text-sm font-semibold text-content-primary">Euro / US Dollar</span>
                                                                                    <span class="text-xs text-content-tertiary ml-1">EUR/USD</span>
                                                                            </div>
                                </div>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <span class="text-sm font-medium text-content-primary">
                                    $1.14
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                                                    <span class="inline-flex items-center gap-1 text-xs font-semibold text-gain">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
</svg>
                                        +0.06%
                                    </span>
                                                            </td>
                            
                            <td class="px-4 py-3">
                                <span class="px-2 py-0.5 text-[10px] font-medium rounded-full bg-surface-overlay text-content-secondary capitalize">
                                    forex
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <a href="{{ route('user.trade') }}?asset=16"
                                   class="inline-flex items-center gap-1 px-3 py-1.5 text-xs font-medium rounded-lg bg-primary hover:bg-primary-dark text-content-inverse transition-colors opacity-0 group-hover:opacity-100 focus:opacity-100">
                                    Trade
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
</svg>
                                </a>
                            </td>
                        </tr>
                                            <tr class="hover:bg-surface-overlay/50 transition-colors group">
                            
                            <td class="px-4 py-3">
                                <div class="flex items-center gap-3">
                                                                            <img src="https://img.icons8.com/color/48/gold-bars.png" alt="" class="w-8 h-8 rounded-full bg-surface-overlay" loading="lazy">
                                                                        <div>
                                        <span class="text-sm font-semibold text-content-primary">Gold Spot / US Dollar</span>
                                                                                    <span class="text-xs text-content-tertiary ml-1">XAU/USD</span>
                                                                            </div>
                                </div>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <span class="text-sm font-medium text-content-primary">
                                    $4,046.09
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                                                    <span class="inline-flex items-center gap-1 text-xs font-semibold text-loss">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6 9 12.75l6.75-6.75M2.25 12.75 9 19.5l6.75-6.75" />
</svg>
                                        -0.76%
                                    </span>
                                                            </td>
                            
                            <td class="px-4 py-3">
                                <span class="px-2 py-0.5 text-[10px] font-medium rounded-full bg-surface-overlay text-content-secondary capitalize">
                                    forex
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <a href="{{ route('user.trade') }}?asset=26"
                                   class="inline-flex items-center gap-1 px-3 py-1.5 text-xs font-medium rounded-lg bg-primary hover:bg-primary-dark text-content-inverse transition-colors opacity-0 group-hover:opacity-100 focus:opacity-100">
                                    Trade
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
</svg>
                                </a>
                            </td>
                        </tr>
                                            <tr class="hover:bg-surface-overlay/50 transition-colors group">
                            
                            <td class="px-4 py-3">
                                <div class="flex items-center gap-3">
                                                                            <img src="https://hatscripts.github.io/circle-flags/flags/nz.svg" alt="" class="w-8 h-8 rounded-full bg-surface-overlay" loading="lazy">
                                                                        <div>
                                        <span class="text-sm font-semibold text-content-primary">New Zealand Dollar / US Dollar</span>
                                                                                    <span class="text-xs text-content-tertiary ml-1">NZD/USD</span>
                                                                            </div>
                                </div>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <span class="text-sm font-medium text-content-primary">
                                    $0.58
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                                                    <span class="inline-flex items-center gap-1 text-xs font-semibold text-loss">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6 9 12.75l6.75-6.75M2.25 12.75 9 19.5l6.75-6.75" />
</svg>
                                        -0.05%
                                    </span>
                                                            </td>
                            
                            <td class="px-4 py-3">
                                <span class="px-2 py-0.5 text-[10px] font-medium rounded-full bg-surface-overlay text-content-secondary capitalize">
                                    forex
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <a href="{{ route('user.trade') }}?asset=21"
                                   class="inline-flex items-center gap-1 px-3 py-1.5 text-xs font-medium rounded-lg bg-primary hover:bg-primary-dark text-content-inverse transition-colors opacity-0 group-hover:opacity-100 focus:opacity-100">
                                    Trade
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
</svg>
                                </a>
                            </td>
                        </tr>
                                            <tr class="hover:bg-surface-overlay/50 transition-colors group">
                            
                            <td class="px-4 py-3">
                                <div class="flex items-center gap-3">
                                                                            <img src="https://img.icons8.com/color/48/silver-bars.png" alt="" class="w-8 h-8 rounded-full bg-surface-overlay" loading="lazy">
                                                                        <div>
                                        <span class="text-sm font-semibold text-content-primary">Silver / US Dollar</span>
                                                                                    <span class="text-xs text-content-tertiary ml-1">XAG/USD</span>
                                                                            </div>
                                </div>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <span class="text-sm font-medium text-content-primary">
                                    $24.82
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                                                    <span class="inline-flex items-center gap-1 text-xs font-semibold text-gain">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
</svg>
                                        +0.68%
                                    </span>
                                                            </td>
                            
                            <td class="px-4 py-3">
                                <span class="px-2 py-0.5 text-[10px] font-medium rounded-full bg-surface-overlay text-content-secondary capitalize">
                                    forex
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <a href="{{ route('user.trade') }}?asset=27"
                                   class="inline-flex items-center gap-1 px-3 py-1.5 text-xs font-medium rounded-lg bg-primary hover:bg-primary-dark text-content-inverse transition-colors opacity-0 group-hover:opacity-100 focus:opacity-100">
                                    Trade
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
</svg>
                                </a>
                            </td>
                        </tr>
                                            <tr class="hover:bg-surface-overlay/50 transition-colors group">
                            
                            <td class="px-4 py-3">
                                <div class="flex items-center gap-3">
                                                                            <img src="https://hatscripts.github.io/circle-flags/flags/ca.svg" alt="" class="w-8 h-8 rounded-full bg-surface-overlay" loading="lazy">
                                                                        <div>
                                        <span class="text-sm font-semibold text-content-primary">US Dollar / Canadian Dollar</span>
                                                                                    <span class="text-xs text-content-tertiary ml-1">USD/CAD</span>
                                                                            </div>
                                </div>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <span class="text-sm font-medium text-content-primary">
                                    $1.41
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                                                    <span class="inline-flex items-center gap-1 text-xs font-semibold text-loss">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6 9 12.75l6.75-6.75M2.25 12.75 9 19.5l6.75-6.75" />
</svg>
                                        -0.04%
                                    </span>
                                                            </td>
                            
                            <td class="px-4 py-3">
                                <span class="px-2 py-0.5 text-[10px] font-medium rounded-full bg-surface-overlay text-content-secondary capitalize">
                                    forex
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <a href="{{ route('user.trade') }}?asset=22"
                                   class="inline-flex items-center gap-1 px-3 py-1.5 text-xs font-medium rounded-lg bg-primary hover:bg-primary-dark text-content-inverse transition-colors opacity-0 group-hover:opacity-100 focus:opacity-100">
                                    Trade
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
</svg>
                                </a>
                            </td>
                        </tr>
                                            <tr class="hover:bg-surface-overlay/50 transition-colors group">
                            
                            <td class="px-4 py-3">
                                <div class="flex items-center gap-3">
                                                                            <img src="https://hatscripts.github.io/circle-flags/flags/us.svg" alt="" class="w-8 h-8 rounded-full bg-surface-overlay" loading="lazy">
                                                                        <div>
                                        <span class="text-sm font-semibold text-content-primary">US Dollar / Japanese Yen</span>
                                                                                    <span class="text-xs text-content-tertiary ml-1">USD/JPY</span>
                                                                            </div>
                                </div>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <span class="text-sm font-medium text-content-primary">
                                    $163.77
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                                                    <span class="inline-flex items-center gap-1 text-xs font-semibold text-gain">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
</svg>
                                        +0.02%
                                    </span>
                                                            </td>
                            
                            <td class="px-4 py-3">
                                <span class="px-2 py-0.5 text-[10px] font-medium rounded-full bg-surface-overlay text-content-secondary capitalize">
                                    forex
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <a href="{{ route('user.trade') }}?asset=18"
                                   class="inline-flex items-center gap-1 px-3 py-1.5 text-xs font-medium rounded-lg bg-primary hover:bg-primary-dark text-content-inverse transition-colors opacity-0 group-hover:opacity-100 focus:opacity-100">
                                    Trade
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
</svg>
                                </a>
                            </td>
                        </tr>
                                            <tr class="hover:bg-surface-overlay/50 transition-colors group">
                            
                            <td class="px-4 py-3">
                                <div class="flex items-center gap-3">
                                                                            <img src="https://hatscripts.github.io/circle-flags/flags/ch.svg" alt="" class="w-8 h-8 rounded-full bg-surface-overlay" loading="lazy">
                                                                        <div>
                                        <span class="text-sm font-semibold text-content-primary">US Dollar / Swiss Franc</span>
                                                                                    <span class="text-xs text-content-tertiary ml-1">USD/CHF</span>
                                                                            </div>
                                </div>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <span class="text-sm font-medium text-content-primary">
                                    $0.82
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                                                    <span class="inline-flex items-center gap-1 text-xs font-semibold text-loss">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6 9 12.75l6.75-6.75M2.25 12.75 9 19.5l6.75-6.75" />
</svg>
                                        -0.07%
                                    </span>
                                                            </td>
                            
                            <td class="px-4 py-3">
                                <span class="px-2 py-0.5 text-[10px] font-medium rounded-full bg-surface-overlay text-content-secondary capitalize">
                                    forex
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <a href="{{ route('user.trade') }}?asset=20"
                                   class="inline-flex items-center gap-1 px-3 py-1.5 text-xs font-medium rounded-lg bg-primary hover:bg-primary-dark text-content-inverse transition-colors opacity-0 group-hover:opacity-100 focus:opacity-100">
                                    Trade
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
</svg>
                                </a>
                            </td>
                        </tr>
                                            <tr class="hover:bg-surface-overlay/50 transition-colors group">
                            
                            <td class="px-4 py-3">
                                <div class="flex items-center gap-3">
                                                                            <div class="w-8 h-8 rounded-full bg-surface-overlay flex items-center justify-center text-xs font-bold text-content-secondary">
                                            AM
                                        </div>
                                                                        <div>
                                        <span class="text-sm font-semibold text-content-primary">Advanced Micro Devices, Inc.</span>
                                                                                    <span class="text-xs text-content-tertiary ml-1">AMD</span>
                                                                            </div>
                                </div>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <span class="text-sm font-medium text-content-primary">
                                    $494.95
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                                                    <span class="inline-flex items-center gap-1 text-xs font-semibold text-loss">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6 9 12.75l6.75-6.75M2.25 12.75 9 19.5l6.75-6.75" />
</svg>
                                        -5.17%
                                    </span>
                                                            </td>
                            
                            <td class="px-4 py-3">
                                <span class="px-2 py-0.5 text-[10px] font-medium rounded-full bg-surface-overlay text-content-secondary capitalize">
                                    stock
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <a href="{{ route('user.trade') }}?asset=86"
                                   class="inline-flex items-center gap-1 px-3 py-1.5 text-xs font-medium rounded-lg bg-primary hover:bg-primary-dark text-content-inverse transition-colors opacity-0 group-hover:opacity-100 focus:opacity-100">
                                    Trade
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
</svg>
                                </a>
                            </td>
                        </tr>
                                            <tr class="hover:bg-surface-overlay/50 transition-colors group">
                            
                            <td class="px-4 py-3">
                                <div class="flex items-center gap-3">
                                                                            <img src="https://static2.finnhub.io/file/publicdatany/finnhubimage/stock_logo/GOOG.png" alt="" class="w-8 h-8 rounded-full bg-surface-overlay" loading="lazy">
                                                                        <div>
                                        <span class="text-sm font-semibold text-content-primary">Alphabet Inc.</span>
                                                                                    <span class="text-xs text-content-tertiary ml-1">GOOGL</span>
                                                                            </div>
                                </div>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <span class="text-sm font-medium text-content-primary">
                                    $326.56
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                                                    <span class="inline-flex items-center gap-1 text-xs font-semibold text-gain">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
</svg>
                                        +2.13%
                                    </span>
                                                            </td>
                            
                            <td class="px-4 py-3">
                                <span class="px-2 py-0.5 text-[10px] font-medium rounded-full bg-surface-overlay text-content-secondary capitalize">
                                    stock
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <a href="{{ route('user.trade') }}?asset=30"
                                   class="inline-flex items-center gap-1 px-3 py-1.5 text-xs font-medium rounded-lg bg-primary hover:bg-primary-dark text-content-inverse transition-colors opacity-0 group-hover:opacity-100 focus:opacity-100">
                                    Trade
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
</svg>
                                </a>
                            </td>
                        </tr>
                                            <tr class="hover:bg-surface-overlay/50 transition-colors group">
                            
                            <td class="px-4 py-3">
                                <div class="flex items-center gap-3">
                                                                            <img src="https://static2.finnhub.io/file/publicdatany/finnhubimage/stock_logo/AMZN.png" alt="" class="w-8 h-8 rounded-full bg-surface-overlay" loading="lazy">
                                                                        <div>
                                        <span class="text-sm font-semibold text-content-primary">Amazon.com, Inc.</span>
                                                                                    <span class="text-xs text-content-tertiary ml-1">AMZN</span>
                                                                            </div>
                                </div>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <span class="text-sm font-medium text-content-primary">
                                    $231.39
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                                                    <span class="inline-flex items-center gap-1 text-xs font-semibold text-loss">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6 9 12.75l6.75-6.75M2.25 12.75 9 19.5l6.75-6.75" />
</svg>
                                        -0.31%
                                    </span>
                                                            </td>
                            
                            <td class="px-4 py-3">
                                <span class="px-2 py-0.5 text-[10px] font-medium rounded-full bg-surface-overlay text-content-secondary capitalize">
                                    stock
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <a href="{{ route('user.trade') }}?asset=31"
                                   class="inline-flex items-center gap-1 px-3 py-1.5 text-xs font-medium rounded-lg bg-primary hover:bg-primary-dark text-content-inverse transition-colors opacity-0 group-hover:opacity-100 focus:opacity-100">
                                    Trade
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
</svg>
                                </a>
                            </td>
                        </tr>
                                            <tr class="hover:bg-surface-overlay/50 transition-colors group">
                            
                            <td class="px-4 py-3">
                                <div class="flex items-center gap-3">
                                                                            <img src="https://static2.finnhub.io/file/publicdatany/finnhubimage/stock_logo/AAPL.png" alt="" class="w-8 h-8 rounded-full bg-surface-overlay" loading="lazy">
                                                                        <div>
                                        <span class="text-sm font-semibold text-content-primary">Apple Inc.</span>
                                                                                    <span class="text-xs text-content-tertiary ml-1">AAPL</span>
                                                                            </div>
                                </div>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <span class="text-sm font-medium text-content-primary">
                                    $336.91
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                                                    <span class="inline-flex items-center gap-1 text-xs font-semibold text-gain">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
</svg>
                                        +1.17%
                                    </span>
                                                            </td>
                            
                            <td class="px-4 py-3">
                                <span class="px-2 py-0.5 text-[10px] font-medium rounded-full bg-surface-overlay text-content-secondary capitalize">
                                    stock
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <a href="{{ route('user.trade') }}?asset=28"
                                   class="inline-flex items-center gap-1 px-3 py-1.5 text-xs font-medium rounded-lg bg-primary hover:bg-primary-dark text-content-inverse transition-colors opacity-0 group-hover:opacity-100 focus:opacity-100">
                                    Trade
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
</svg>
                                </a>
                            </td>
                        </tr>
                                            <tr class="hover:bg-surface-overlay/50 transition-colors group">
                            
                            <td class="px-4 py-3">
                                <div class="flex items-center gap-3">
                                                                            <img src="https://logo.clearbit.com/boeing.com" alt="" class="w-8 h-8 rounded-full bg-surface-overlay" loading="lazy">
                                                                        <div>
                                        <span class="text-sm font-semibold text-content-primary">Boeing Company</span>
                                                                                    <span class="text-xs text-content-tertiary ml-1">BA</span>
                                                                            </div>
                                </div>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <span class="text-sm font-medium text-content-primary">
                                    $211.50
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                                                    <span class="inline-flex items-center gap-1 text-xs font-semibold text-gain">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
</svg>
                                        +0.95%
                                    </span>
                                                            </td>
                            
                            <td class="px-4 py-3">
                                <span class="px-2 py-0.5 text-[10px] font-medium rounded-full bg-surface-overlay text-content-secondary capitalize">
                                    stock
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <a href="{{ route('user.trade') }}?asset=40"
                                   class="inline-flex items-center gap-1 px-3 py-1.5 text-xs font-medium rounded-lg bg-primary hover:bg-primary-dark text-content-inverse transition-colors opacity-0 group-hover:opacity-100 focus:opacity-100">
                                    Trade
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
</svg>
                                </a>
                            </td>
                        </tr>
                                            <tr class="hover:bg-surface-overlay/50 transition-colors group">
                            
                            <td class="px-4 py-3">
                                <div class="flex items-center gap-3">
                                                                            <img src="https://static2.finnhub.io/file/publicdatany/finnhubimage/stock_logo/INTC.png" alt="" class="w-8 h-8 rounded-full bg-surface-overlay" loading="lazy">
                                                                        <div>
                                        <span class="text-sm font-semibold text-content-primary">Intel Corporation</span>
                                                                                    <span class="text-xs text-content-tertiary ml-1">INTC</span>
                                                                            </div>
                                </div>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <span class="text-sm font-medium text-content-primary">
                                    $91.67
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                                                    <span class="inline-flex items-center gap-1 text-xs font-semibold text-loss">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6 9 12.75l6.75-6.75M2.25 12.75 9 19.5l6.75-6.75" />
</svg>
                                        -0.70%
                                    </span>
                                                            </td>
                            
                            <td class="px-4 py-3">
                                <span class="px-2 py-0.5 text-[10px] font-medium rounded-full bg-surface-overlay text-content-secondary capitalize">
                                    stock
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <a href="{{ route('user.trade') }}?asset=37"
                                   class="inline-flex items-center gap-1 px-3 py-1.5 text-xs font-medium rounded-lg bg-primary hover:bg-primary-dark text-content-inverse transition-colors opacity-0 group-hover:opacity-100 focus:opacity-100">
                                    Trade
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
</svg>
                                </a>
                            </td>
                        </tr>
                                            <tr class="hover:bg-surface-overlay/50 transition-colors group">
                            
                            <td class="px-4 py-3">
                                <div class="flex items-center gap-3">
                                                                            <img src="https://logo.clearbit.com/jpmorganchase.com" alt="" class="w-8 h-8 rounded-full bg-surface-overlay" loading="lazy">
                                                                        <div>
                                        <span class="text-sm font-semibold text-content-primary">JPMorgan Chase &amp; Co.</span>
                                                                                    <span class="text-xs text-content-tertiary ml-1">JPM</span>
                                                                            </div>
                                </div>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <span class="text-sm font-medium text-content-primary">
                                    $356.20
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                                                    <span class="inline-flex items-center gap-1 text-xs font-semibold text-gain">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
</svg>
                                        +0.85%
                                    </span>
                                                            </td>
                            
                            <td class="px-4 py-3">
                                <span class="px-2 py-0.5 text-[10px] font-medium rounded-full bg-surface-overlay text-content-secondary capitalize">
                                    stock
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <a href="{{ route('user.trade') }}?asset=41"
                                   class="inline-flex items-center gap-1 px-3 py-1.5 text-xs font-medium rounded-lg bg-primary hover:bg-primary-dark text-content-inverse transition-colors opacity-0 group-hover:opacity-100 focus:opacity-100">
                                    Trade
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
</svg>
                                </a>
                            </td>
                        </tr>
                                            <tr class="hover:bg-surface-overlay/50 transition-colors group">
                            
                            <td class="px-4 py-3">
                                <div class="flex items-center gap-3">
                                                                            <img src="https://static2.finnhub.io/file/publicdatany/finnhubimage/stock_logo/FB.png" alt="" class="w-8 h-8 rounded-full bg-surface-overlay" loading="lazy">
                                                                        <div>
                                        <span class="text-sm font-semibold text-content-primary">Meta Platforms Inc Class A</span>
                                                                                    <span class="text-xs text-content-tertiary ml-1">META</span>
                                                                            </div>
                                </div>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <span class="text-sm font-medium text-content-primary">
                                    $593.87
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                                                    <span class="inline-flex items-center gap-1 text-xs font-semibold text-loss">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6 9 12.75l6.75-6.75M2.25 12.75 9 19.5l6.75-6.75" />
</svg>
                                        -0.22%
                                    </span>
                                                            </td>
                            
                            <td class="px-4 py-3">
                                <span class="px-2 py-0.5 text-[10px] font-medium rounded-full bg-surface-overlay text-content-secondary capitalize">
                                    stock
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <a href="{{ route('user.trade') }}?asset=34"
                                   class="inline-flex items-center gap-1 px-3 py-1.5 text-xs font-medium rounded-lg bg-primary hover:bg-primary-dark text-content-inverse transition-colors opacity-0 group-hover:opacity-100 focus:opacity-100">
                                    Trade
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
</svg>
                                </a>
                            </td>
                        </tr>
                                            <tr class="hover:bg-surface-overlay/50 transition-colors group">
                            
                            <td class="px-4 py-3">
                                <div class="flex items-center gap-3">
                                                                            <img src="https://static2.finnhub.io/file/publicdatany/finnhubimage/stock_logo/MSFT.png" alt="" class="w-8 h-8 rounded-full bg-surface-overlay" loading="lazy">
                                                                        <div>
                                        <span class="text-sm font-semibold text-content-primary">Microsoft Corp.</span>
                                                                                    <span class="text-xs text-content-tertiary ml-1">MSFT</span>
                                                                            </div>
                                </div>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <span class="text-sm font-medium text-content-primary">
                                    $389.10
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                                                    <span class="inline-flex items-center gap-1 text-xs font-semibold text-gain">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
</svg>
                                        +1.94%
                                    </span>
                                                            </td>
                            
                            <td class="px-4 py-3">
                                <span class="px-2 py-0.5 text-[10px] font-medium rounded-full bg-surface-overlay text-content-secondary capitalize">
                                    stock
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <a href="{{ route('user.trade') }}?asset=29"
                                   class="inline-flex items-center gap-1 px-3 py-1.5 text-xs font-medium rounded-lg bg-primary hover:bg-primary-dark text-content-inverse transition-colors opacity-0 group-hover:opacity-100 focus:opacity-100">
                                    Trade
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
</svg>
                                </a>
                            </td>
                        </tr>
                                            <tr class="hover:bg-surface-overlay/50 transition-colors group">
                            
                            <td class="px-4 py-3">
                                <div class="flex items-center gap-3">
                                                                            <img src="https://static2.finnhub.io/file/publicdatany/finnhubimage/stock_logo/NFLX.png" alt="" class="w-8 h-8 rounded-full bg-surface-overlay" loading="lazy">
                                                                        <div>
                                        <span class="text-sm font-semibold text-content-primary">Netflix, Inc.</span>
                                                                                    <span class="text-xs text-content-tertiary ml-1">NFLX</span>
                                                                            </div>
                                </div>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <span class="text-sm font-medium text-content-primary">
                                    $70.40
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                                                    <span class="inline-flex items-center gap-1 text-xs font-semibold text-gain">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
</svg>
                                        +0.44%
                                    </span>
                                                            </td>
                            
                            <td class="px-4 py-3">
                                <span class="px-2 py-0.5 text-[10px] font-medium rounded-full bg-surface-overlay text-content-secondary capitalize">
                                    stock
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <a href="{{ route('user.trade') }}?asset=35"
                                   class="inline-flex items-center gap-1 px-3 py-1.5 text-xs font-medium rounded-lg bg-primary hover:bg-primary-dark text-content-inverse transition-colors opacity-0 group-hover:opacity-100 focus:opacity-100">
                                    Trade
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
</svg>
                                </a>
                            </td>
                        </tr>
                                            <tr class="hover:bg-surface-overlay/50 transition-colors group">
                            
                            <td class="px-4 py-3">
                                <div class="flex items-center gap-3">
                                                                            <img src="https://static2.finnhub.io/file/publicdatany/finnhubimage/stock_logo/NVDA.png" alt="" class="w-8 h-8 rounded-full bg-surface-overlay" loading="lazy">
                                                                        <div>
                                        <span class="text-sm font-semibold text-content-primary">NVIDIA Corporation</span>
                                                                                    <span class="text-xs text-content-tertiary ml-1">NVDA</span>
                                                                            </div>
                                </div>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <span class="text-sm font-medium text-content-primary">
                                    $196.51
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                                                    <span class="inline-flex items-center gap-1 text-xs font-semibold text-loss">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6 9 12.75l6.75-6.75M2.25 12.75 9 19.5l6.75-6.75" />
</svg>
                                        -4.99%
                                    </span>
                                                            </td>
                            
                            <td class="px-4 py-3">
                                <span class="px-2 py-0.5 text-[10px] font-medium rounded-full bg-surface-overlay text-content-secondary capitalize">
                                    stock
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <a href="{{ route('user.trade') }}?asset=33"
                                   class="inline-flex items-center gap-1 px-3 py-1.5 text-xs font-medium rounded-lg bg-primary hover:bg-primary-dark text-content-inverse transition-colors opacity-0 group-hover:opacity-100 focus:opacity-100">
                                    Trade
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
</svg>
                                </a>
                            </td>
                        </tr>
                                            <tr class="hover:bg-surface-overlay/50 transition-colors group">
                            
                            <td class="px-4 py-3">
                                <div class="flex items-center gap-3">
                                                                            <img src="https://logo.clearbit.com/paypal.com" alt="" class="w-8 h-8 rounded-full bg-surface-overlay" loading="lazy">
                                                                        <div>
                                        <span class="text-sm font-semibold text-content-primary">PayPal Holdings Inc</span>
                                                                                    <span class="text-xs text-content-tertiary ml-1">PYPL</span>
                                                                            </div>
                                </div>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <span class="text-sm font-medium text-content-primary">
                                    $56.07
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                                                    <span class="inline-flex items-center gap-1 text-xs font-semibold text-loss">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6 9 12.75l6.75-6.75M2.25 12.75 9 19.5l6.75-6.75" />
</svg>
                                        -0.14%
                                    </span>
                                                            </td>
                            
                            <td class="px-4 py-3">
                                <span class="px-2 py-0.5 text-[10px] font-medium rounded-full bg-surface-overlay text-content-secondary capitalize">
                                    stock
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <a href="{{ route('user.trade') }}?asset=38"
                                   class="inline-flex items-center gap-1 px-3 py-1.5 text-xs font-medium rounded-lg bg-primary hover:bg-primary-dark text-content-inverse transition-colors opacity-0 group-hover:opacity-100 focus:opacity-100">
                                    Trade
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
</svg>
                                </a>
                            </td>
                        </tr>
                                            <tr class="hover:bg-surface-overlay/50 transition-colors group">
                            
                            <td class="px-4 py-3">
                                <div class="flex items-center gap-3">
                                                                            <img src="https://static2.finnhub.io/file/publicdatany/finnhubimage/stock_logo/TSLA.png" alt="" class="w-8 h-8 rounded-full bg-surface-overlay" loading="lazy">
                                                                        <div>
                                        <span class="text-sm font-semibold text-content-primary">Tesla, Inc.</span>
                                                                                    <span class="text-xs text-content-tertiary ml-1">TSLA</span>
                                                                            </div>
                                </div>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <span class="text-sm font-medium text-content-primary">
                                    $309.22
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                                                    <span class="inline-flex items-center gap-1 text-xs font-semibold text-loss">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6 9 12.75l6.75-6.75M2.25 12.75 9 19.5l6.75-6.75" />
</svg>
                                        -1.22%
                                    </span>
                                                            </td>
                            
                            <td class="px-4 py-3">
                                <span class="px-2 py-0.5 text-[10px] font-medium rounded-full bg-surface-overlay text-content-secondary capitalize">
                                    stock
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <a href="{{ route('user.trade') }}?asset=32"
                                   class="inline-flex items-center gap-1 px-3 py-1.5 text-xs font-medium rounded-lg bg-primary hover:bg-primary-dark text-content-inverse transition-colors opacity-0 group-hover:opacity-100 focus:opacity-100">
                                    Trade
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
</svg>
                                </a>
                            </td>
                        </tr>
                                            <tr class="hover:bg-surface-overlay/50 transition-colors group">
                            
                            <td class="px-4 py-3">
                                <div class="flex items-center gap-3">
                                                                            <img src="https://logo.clearbit.com/disney.com" alt="" class="w-8 h-8 rounded-full bg-surface-overlay" loading="lazy">
                                                                        <div>
                                        <span class="text-sm font-semibold text-content-primary">The Walt Disney Company</span>
                                                                                    <span class="text-xs text-content-tertiary ml-1">DIS</span>
                                                                            </div>
                                </div>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <span class="text-sm font-medium text-content-primary">
                                    $96.65
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                                                    <span class="inline-flex items-center gap-1 text-xs font-semibold text-gain">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
</svg>
                                        +1.90%
                                    </span>
                                                            </td>
                            
                            <td class="px-4 py-3">
                                <span class="px-2 py-0.5 text-[10px] font-medium rounded-full bg-surface-overlay text-content-secondary capitalize">
                                    stock
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <a href="{{ route('user.trade') }}?asset=39"
                                   class="inline-flex items-center gap-1 px-3 py-1.5 text-xs font-medium rounded-lg bg-primary hover:bg-primary-dark text-content-inverse transition-colors opacity-0 group-hover:opacity-100 focus:opacity-100">
                                    Trade
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
</svg>
                                </a>
                            </td>
                        </tr>
                                            <tr class="hover:bg-surface-overlay/50 transition-colors group">
                            
                            <td class="px-4 py-3">
                                <div class="flex items-center gap-3">
                                                                            <img src="https://logo.clearbit.com/ark-invest.com" alt="" class="w-8 h-8 rounded-full bg-surface-overlay" loading="lazy">
                                                                        <div>
                                        <span class="text-sm font-semibold text-content-primary">ARK Innovation ETF Fund</span>
                                                                                    <span class="text-xs text-content-tertiary ml-1">ARKK</span>
                                                                            </div>
                                </div>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <span class="text-sm font-medium text-content-primary">
                                    $72.53
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                                                    <span class="inline-flex items-center gap-1 text-xs font-semibold text-gain">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
</svg>
                                        +0.89%
                                    </span>
                                                            </td>
                            
                            <td class="px-4 py-3">
                                <span class="px-2 py-0.5 text-[10px] font-medium rounded-full bg-surface-overlay text-content-secondary capitalize">
                                    etf
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <a href="{{ route('user.trade') }}?asset=50"
                                   class="inline-flex items-center gap-1 px-3 py-1.5 text-xs font-medium rounded-lg bg-primary hover:bg-primary-dark text-content-inverse transition-colors opacity-0 group-hover:opacity-100 focus:opacity-100">
                                    Trade
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
</svg>
                                </a>
                            </td>
                        </tr>
                                            <tr class="hover:bg-surface-overlay/50 transition-colors group">
                            
                            <td class="px-4 py-3">
                                <div class="flex items-center gap-3">
                                                                            <img src="https://logo.clearbit.com/ssga.com" alt="" class="w-8 h-8 rounded-full bg-surface-overlay" loading="lazy">
                                                                        <div>
                                        <span class="text-sm font-semibold text-content-primary">Financial Select Sector SPDR Fund</span>
                                                                                    <span class="text-xs text-content-tertiary ml-1">XLF</span>
                                                                            </div>
                                </div>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <span class="text-sm font-medium text-content-primary">
                                    $56.88
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                                                    <span class="inline-flex items-center gap-1 text-xs font-semibold text-gain">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
</svg>
                                        +1.01%
                                    </span>
                                                            </td>
                            
                            <td class="px-4 py-3">
                                <span class="px-2 py-0.5 text-[10px] font-medium rounded-full bg-surface-overlay text-content-secondary capitalize">
                                    etf
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <a href="{{ route('user.trade') }}?asset=49"
                                   class="inline-flex items-center gap-1 px-3 py-1.5 text-xs font-medium rounded-lg bg-primary hover:bg-primary-dark text-content-inverse transition-colors opacity-0 group-hover:opacity-100 focus:opacity-100">
                                    Trade
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
</svg>
                                </a>
                            </td>
                        </tr>
                                            <tr class="hover:bg-surface-overlay/50 transition-colors group">
                            
                            <td class="px-4 py-3">
                                <div class="flex items-center gap-3">
                                                                            <img src="https://logo.clearbit.com/invesco.com" alt="" class="w-8 h-8 rounded-full bg-surface-overlay" loading="lazy">
                                                                        <div>
                                        <span class="text-sm font-semibold text-content-primary">Invesco QQQ Trust, Series 1</span>
                                                                                    <span class="text-xs text-content-tertiary ml-1">QQQ</span>
                                                                            </div>
                                </div>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <span class="text-sm font-medium text-content-primary">
                                    $682.12
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                                                    <span class="inline-flex items-center gap-1 text-xs font-semibold text-loss">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6 9 12.75l6.75-6.75M2.25 12.75 9 19.5l6.75-6.75" />
</svg>
                                        -0.31%
                                    </span>
                                                            </td>
                            
                            <td class="px-4 py-3">
                                <span class="px-2 py-0.5 text-[10px] font-medium rounded-full bg-surface-overlay text-content-secondary capitalize">
                                    etf
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <a href="{{ route('user.trade') }}?asset=43"
                                   class="inline-flex items-center gap-1 px-3 py-1.5 text-xs font-medium rounded-lg bg-primary hover:bg-primary-dark text-content-inverse transition-colors opacity-0 group-hover:opacity-100 focus:opacity-100">
                                    Trade
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
</svg>
                                </a>
                            </td>
                        </tr>
                                            <tr class="hover:bg-surface-overlay/50 transition-colors group">
                            
                            <td class="px-4 py-3">
                                <div class="flex items-center gap-3">
                                                                            <img src="https://logo.clearbit.com/ishares.com" alt="" class="w-8 h-8 rounded-full bg-surface-overlay" loading="lazy">
                                                                        <div>
                                        <span class="text-sm font-semibold text-content-primary">iShares 20+ Year Treasury Bond ETF</span>
                                                                                    <span class="text-xs text-content-tertiary ml-1">TLT</span>
                                                                            </div>
                                </div>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <span class="text-sm font-medium text-content-primary">
                                    $83.75
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                                                    <span class="inline-flex items-center gap-1 text-xs font-semibold text-gain">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
</svg>
                                        +0.60%
                                    </span>
                                                            </td>
                            
                            <td class="px-4 py-3">
                                <span class="px-2 py-0.5 text-[10px] font-medium rounded-full bg-surface-overlay text-content-secondary capitalize">
                                    etf
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <a href="{{ route('user.trade') }}?asset=48"
                                   class="inline-flex items-center gap-1 px-3 py-1.5 text-xs font-medium rounded-lg bg-primary hover:bg-primary-dark text-content-inverse transition-colors opacity-0 group-hover:opacity-100 focus:opacity-100">
                                    Trade
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
</svg>
                                </a>
                            </td>
                        </tr>
                                            <tr class="hover:bg-surface-overlay/50 transition-colors group">
                            
                            <td class="px-4 py-3">
                                <div class="flex items-center gap-3">
                                                                            <img src="https://logo.clearbit.com/ishares.com" alt="" class="w-8 h-8 rounded-full bg-surface-overlay" loading="lazy">
                                                                        <div>
                                        <span class="text-sm font-semibold text-content-primary">iShares MSCI Emerging Markets ETF</span>
                                                                                    <span class="text-xs text-content-tertiary ml-1">EEM</span>
                                                                            </div>
                                </div>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <span class="text-sm font-medium text-content-primary">
                                    $63.62
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                                                    <span class="inline-flex items-center gap-1 text-xs font-semibold text-gain">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
</svg>
                                        +0.46%
                                    </span>
                                                            </td>
                            
                            <td class="px-4 py-3">
                                <span class="px-2 py-0.5 text-[10px] font-medium rounded-full bg-surface-overlay text-content-secondary capitalize">
                                    etf
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <a href="{{ route('user.trade') }}?asset=46"
                                   class="inline-flex items-center gap-1 px-3 py-1.5 text-xs font-medium rounded-lg bg-primary hover:bg-primary-dark text-content-inverse transition-colors opacity-0 group-hover:opacity-100 focus:opacity-100">
                                    Trade
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
</svg>
                                </a>
                            </td>
                        </tr>
                                            <tr class="hover:bg-surface-overlay/50 transition-colors group">
                            
                            <td class="px-4 py-3">
                                <div class="flex items-center gap-3">
                                                                            <img src="https://logo.clearbit.com/ishares.com" alt="" class="w-8 h-8 rounded-full bg-surface-overlay" loading="lazy">
                                                                        <div>
                                        <span class="text-sm font-semibold text-content-primary">iShares Russell 2000 ETF</span>
                                                                                    <span class="text-xs text-content-tertiary ml-1">IWM</span>
                                                                            </div>
                                </div>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <span class="text-sm font-medium text-content-primary">
                                    $292.91
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                                                    <span class="inline-flex items-center gap-1 text-xs font-semibold text-gain">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
</svg>
                                        +0.60%
                                    </span>
                                                            </td>
                            
                            <td class="px-4 py-3">
                                <span class="px-2 py-0.5 text-[10px] font-medium rounded-full bg-surface-overlay text-content-secondary capitalize">
                                    etf
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <a href="{{ route('user.trade') }}?asset=44"
                                   class="inline-flex items-center gap-1 px-3 py-1.5 text-xs font-medium rounded-lg bg-primary hover:bg-primary-dark text-content-inverse transition-colors opacity-0 group-hover:opacity-100 focus:opacity-100">
                                    Trade
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
</svg>
                                </a>
                            </td>
                        </tr>
                                            <tr class="hover:bg-surface-overlay/50 transition-colors group">
                            
                            <td class="px-4 py-3">
                                <div class="flex items-center gap-3">
                                                                            <img src="https://logo.clearbit.com/ssga.com" alt="" class="w-8 h-8 rounded-full bg-surface-overlay" loading="lazy">
                                                                        <div>
                                        <span class="text-sm font-semibold text-content-primary">SPDR Dow Jones Industrial Average ETF Trust</span>
                                                                                    <span class="text-xs text-content-tertiary ml-1">DIA</span>
                                                                            </div>
                                </div>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <span class="text-sm font-medium text-content-primary">
                                    $521.26
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                                                    <span class="inline-flex items-center gap-1 text-xs font-semibold text-gain">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
</svg>
                                        +0.48%
                                    </span>
                                                            </td>
                            
                            <td class="px-4 py-3">
                                <span class="px-2 py-0.5 text-[10px] font-medium rounded-full bg-surface-overlay text-content-secondary capitalize">
                                    etf
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <a href="{{ route('user.trade') }}?asset=51"
                                   class="inline-flex items-center gap-1 px-3 py-1.5 text-xs font-medium rounded-lg bg-primary hover:bg-primary-dark text-content-inverse transition-colors opacity-0 group-hover:opacity-100 focus:opacity-100">
                                    Trade
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
</svg>
                                </a>
                            </td>
                        </tr>
                                            <tr class="hover:bg-surface-overlay/50 transition-colors group">
                            
                            <td class="px-4 py-3">
                                <div class="flex items-center gap-3">
                                                                            <img src="https://logo.clearbit.com/ssga.com" alt="" class="w-8 h-8 rounded-full bg-surface-overlay" loading="lazy">
                                                                        <div>
                                        <span class="text-sm font-semibold text-content-primary">SPDR Gold Shares</span>
                                                                                    <span class="text-xs text-content-tertiary ml-1">GLD</span>
                                                                            </div>
                                </div>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <span class="text-sm font-medium text-content-primary">
                                    $374.63
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                                                    <span class="inline-flex items-center gap-1 text-xs font-semibold text-gain">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
</svg>
                                        +0.73%
                                    </span>
                                                            </td>
                            
                            <td class="px-4 py-3">
                                <span class="px-2 py-0.5 text-[10px] font-medium rounded-full bg-surface-overlay text-content-secondary capitalize">
                                    etf
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <a href="{{ route('user.trade') }}?asset=47"
                                   class="inline-flex items-center gap-1 px-3 py-1.5 text-xs font-medium rounded-lg bg-primary hover:bg-primary-dark text-content-inverse transition-colors opacity-0 group-hover:opacity-100 focus:opacity-100">
                                    Trade
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
</svg>
                                </a>
                            </td>
                        </tr>
                                            <tr class="hover:bg-surface-overlay/50 transition-colors group">
                            
                            <td class="px-4 py-3">
                                <div class="flex items-center gap-3">
                                                                            <img src="https://logo.clearbit.com/ssga.com" alt="" class="w-8 h-8 rounded-full bg-surface-overlay" loading="lazy">
                                                                        <div>
                                        <span class="text-sm font-semibold text-content-primary">SPDR S&amp;P 500 ETF Trust</span>
                                                                                    <span class="text-xs text-content-tertiary ml-1">SPY</span>
                                                                            </div>
                                </div>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <span class="text-sm font-medium text-content-primary">
                                    $739.09
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                                                    <span class="inline-flex items-center gap-1 text-xs font-semibold text-gain">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
</svg>
                                        +0.02%
                                    </span>
                                                            </td>
                            
                            <td class="px-4 py-3">
                                <span class="px-2 py-0.5 text-[10px] font-medium rounded-full bg-surface-overlay text-content-secondary capitalize">
                                    etf
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <a href="{{ route('user.trade') }}?asset=42"
                                   class="inline-flex items-center gap-1 px-3 py-1.5 text-xs font-medium rounded-lg bg-primary hover:bg-primary-dark text-content-inverse transition-colors opacity-0 group-hover:opacity-100 focus:opacity-100">
                                    Trade
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
</svg>
                                </a>
                            </td>
                        </tr>
                                            <tr class="hover:bg-surface-overlay/50 transition-colors group">
                            
                            <td class="px-4 py-3">
                                <div class="flex items-center gap-3">
                                                                            <img src="https://logo.clearbit.com/vanguard.com" alt="" class="w-8 h-8 rounded-full bg-surface-overlay" loading="lazy">
                                                                        <div>
                                        <span class="text-sm font-semibold text-content-primary">VANGUARD TOTAL STOCK MKT ETF</span>
                                                                                    <span class="text-xs text-content-tertiary ml-1">VTI</span>
                                                                            </div>
                                </div>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <span class="text-sm font-medium text-content-primary">
                                    $365.18
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                                                    <span class="inline-flex items-center gap-1 text-xs font-semibold text-gain">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
</svg>
                                        +0.10%
                                    </span>
                                                            </td>
                            
                            <td class="px-4 py-3">
                                <span class="px-2 py-0.5 text-[10px] font-medium rounded-full bg-surface-overlay text-content-secondary capitalize">
                                    etf
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <a href="{{ route('user.trade') }}?asset=45"
                                   class="inline-flex items-center gap-1 px-3 py-1.5 text-xs font-medium rounded-lg bg-primary hover:bg-primary-dark text-content-inverse transition-colors opacity-0 group-hover:opacity-100 focus:opacity-100">
                                    Trade
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
</svg>
                                </a>
                            </td>
                        </tr>
                                            <tr class="hover:bg-surface-overlay/50 transition-colors group">
                            
                            <td class="px-4 py-3">
                                <div class="flex items-center gap-3">
                                                                            <img src="https://logo.clearbit.com/dowjones.com" alt="" class="w-8 h-8 rounded-full bg-surface-overlay" loading="lazy">
                                                                        <div>
                                        <span class="text-sm font-semibold text-content-primary">Dow Jones Industrial Average</span>
                                                                                    <span class="text-xs text-content-tertiary ml-1">DJI</span>
                                                                            </div>
                                </div>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <span class="text-sm font-medium text-content-primary">
                                    $39,170.35
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                                                    <span class="inline-flex items-center gap-1 text-xs font-semibold text-gain">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
</svg>
                                        +0.34%
                                    </span>
                                                            </td>
                            
                            <td class="px-4 py-3">
                                <span class="px-2 py-0.5 text-[10px] font-medium rounded-full bg-surface-overlay text-content-secondary capitalize">
                                    index
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <a href="{{ route('user.trade') }}?asset=54"
                                   class="inline-flex items-center gap-1 px-3 py-1.5 text-xs font-medium rounded-lg bg-primary hover:bg-primary-dark text-content-inverse transition-colors opacity-0 group-hover:opacity-100 focus:opacity-100">
                                    Trade
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
</svg>
                                </a>
                            </td>
                        </tr>
                                            <tr class="hover:bg-surface-overlay/50 transition-colors group">
                            
                            <td class="px-4 py-3">
                                <div class="flex items-center gap-3">
                                                                            <img src="https://logo.clearbit.com/stoxx.com" alt="" class="w-8 h-8 rounded-full bg-surface-overlay" loading="lazy">
                                                                        <div>
                                        <span class="text-sm font-semibold text-content-primary">EURO STOXX 50</span>
                                                                                    <span class="text-xs text-content-tertiary ml-1">STOXX50E</span>
                                                                            </div>
                                </div>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <span class="text-sm font-medium text-content-primary">
                                    $4,982.76
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                                                    <span class="inline-flex items-center gap-1 text-xs font-semibold text-gain">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
</svg>
                                        +0.28%
                                    </span>
                                                            </td>
                            
                            <td class="px-4 py-3">
                                <span class="px-2 py-0.5 text-[10px] font-medium rounded-full bg-surface-overlay text-content-secondary capitalize">
                                    index
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <a href="{{ route('user.trade') }}?asset=59"
                                   class="inline-flex items-center gap-1 px-3 py-1.5 text-xs font-medium rounded-lg bg-primary hover:bg-primary-dark text-content-inverse transition-colors opacity-0 group-hover:opacity-100 focus:opacity-100">
                                    Trade
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
</svg>
                                </a>
                            </td>
                        </tr>
                                            <tr class="hover:bg-surface-overlay/50 transition-colors group">
                            
                            <td class="px-4 py-3">
                                <div class="flex items-center gap-3">
                                                                            <img src="https://logo.clearbit.com/lseg.com" alt="" class="w-8 h-8 rounded-full bg-surface-overlay" loading="lazy">
                                                                        <div>
                                        <span class="text-sm font-semibold text-content-primary">FTSE 100</span>
                                                                                    <span class="text-xs text-content-tertiary ml-1">FTSE</span>
                                                                            </div>
                                </div>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <span class="text-sm font-medium text-content-primary">
                                    $7,722.55
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                                                    <span class="inline-flex items-center gap-1 text-xs font-semibold text-loss">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6 9 12.75l6.75-6.75M2.25 12.75 9 19.5l6.75-6.75" />
</svg>
                                        -0.18%
                                    </span>
                                                            </td>
                            
                            <td class="px-4 py-3">
                                <span class="px-2 py-0.5 text-[10px] font-medium rounded-full bg-surface-overlay text-content-secondary capitalize">
                                    index
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <a href="{{ route('user.trade') }}?asset=55"
                                   class="inline-flex items-center gap-1 px-3 py-1.5 text-xs font-medium rounded-lg bg-primary hover:bg-primary-dark text-content-inverse transition-colors opacity-0 group-hover:opacity-100 focus:opacity-100">
                                    Trade
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
</svg>
                                </a>
                            </td>
                        </tr>
                                            <tr class="hover:bg-surface-overlay/50 transition-colors group">
                            
                            <td class="px-4 py-3">
                                <div class="flex items-center gap-3">
                                                                            <img src="https://logo.clearbit.com/deutsche-boerse.com" alt="" class="w-8 h-8 rounded-full bg-surface-overlay" loading="lazy">
                                                                        <div>
                                        <span class="text-sm font-semibold text-content-primary">Global X DAX Germany ETF</span>
                                                                                    <span class="text-xs text-content-tertiary ml-1">DAX</span>
                                                                            </div>
                                </div>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <span class="text-sm font-medium text-content-primary">
                                    $43.82
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                                                    <span class="inline-flex items-center gap-1 text-xs font-semibold text-loss">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6 9 12.75l6.75-6.75M2.25 12.75 9 19.5l6.75-6.75" />
</svg>
                                        -0.83%
                                    </span>
                                                            </td>
                            
                            <td class="px-4 py-3">
                                <span class="px-2 py-0.5 text-[10px] font-medium rounded-full bg-surface-overlay text-content-secondary capitalize">
                                    index
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <a href="{{ route('user.trade') }}?asset=56"
                                   class="inline-flex items-center gap-1 px-3 py-1.5 text-xs font-medium rounded-lg bg-primary hover:bg-primary-dark text-content-inverse transition-colors opacity-0 group-hover:opacity-100 focus:opacity-100">
                                    Trade
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
</svg>
                                </a>
                            </td>
                        </tr>
                                            <tr class="hover:bg-surface-overlay/50 transition-colors group">
                            
                            <td class="px-4 py-3">
                                <div class="flex items-center gap-3">
                                                                            <img src="https://logo.clearbit.com/hsi.com.hk" alt="" class="w-8 h-8 rounded-full bg-surface-overlay" loading="lazy">
                                                                        <div>
                                        <span class="text-sm font-semibold text-content-primary">Hang Seng Index</span>
                                                                                    <span class="text-xs text-content-tertiary ml-1">HSI</span>
                                                                            </div>
                                </div>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <span class="text-sm font-medium text-content-primary">
                                    $16,529.48
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                                                    <span class="inline-flex items-center gap-1 text-xs font-semibold text-loss">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6 9 12.75l6.75-6.75M2.25 12.75 9 19.5l6.75-6.75" />
</svg>
                                        -0.73%
                                    </span>
                                                            </td>
                            
                            <td class="px-4 py-3">
                                <span class="px-2 py-0.5 text-[10px] font-medium rounded-full bg-surface-overlay text-content-secondary capitalize">
                                    index
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <a href="{{ route('user.trade') }}?asset=58"
                                   class="inline-flex items-center gap-1 px-3 py-1.5 text-xs font-medium rounded-lg bg-primary hover:bg-primary-dark text-content-inverse transition-colors opacity-0 group-hover:opacity-100 focus:opacity-100">
                                    Trade
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
</svg>
                                </a>
                            </td>
                        </tr>
                                            <tr class="hover:bg-surface-overlay/50 transition-colors group">
                            
                            <td class="px-4 py-3">
                                <div class="flex items-center gap-3">
                                                                            <img src="https://logo.clearbit.com/nasdaq.com" alt="" class="w-8 h-8 rounded-full bg-surface-overlay" loading="lazy">
                                                                        <div>
                                        <span class="text-sm font-semibold text-content-primary">NASDAQ Composite</span>
                                                                                    <span class="text-xs text-content-tertiary ml-1">IXIC</span>
                                                                            </div>
                                </div>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <span class="text-sm font-medium text-content-primary">
                                    $16,274.94
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                                                    <span class="inline-flex items-center gap-1 text-xs font-semibold text-gain">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
</svg>
                                        +0.82%
                                    </span>
                                                            </td>
                            
                            <td class="px-4 py-3">
                                <span class="px-2 py-0.5 text-[10px] font-medium rounded-full bg-surface-overlay text-content-secondary capitalize">
                                    index
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <a href="{{ route('user.trade') }}?asset=53"
                                   class="inline-flex items-center gap-1 px-3 py-1.5 text-xs font-medium rounded-lg bg-primary hover:bg-primary-dark text-content-inverse transition-colors opacity-0 group-hover:opacity-100 focus:opacity-100">
                                    Trade
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
</svg>
                                </a>
                            </td>
                        </tr>
                                            <tr class="hover:bg-surface-overlay/50 transition-colors group">
                            
                            <td class="px-4 py-3">
                                <div class="flex items-center gap-3">
                                                                            <img src="https://logo.clearbit.com/nikkei.com" alt="" class="w-8 h-8 rounded-full bg-surface-overlay" loading="lazy">
                                                                        <div>
                                        <span class="text-sm font-semibold text-content-primary">Nikkei 225</span>
                                                                                    <span class="text-xs text-content-tertiary ml-1">N225</span>
                                                                            </div>
                                </div>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <span class="text-sm font-medium text-content-primary">
                                    $39,688.94
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                                                    <span class="inline-flex items-center gap-1 text-xs font-semibold text-gain">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
</svg>
                                        +1.12%
                                    </span>
                                                            </td>
                            
                            <td class="px-4 py-3">
                                <span class="px-2 py-0.5 text-[10px] font-medium rounded-full bg-surface-overlay text-content-secondary capitalize">
                                    index
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <a href="{{ route('user.trade') }}?asset=57"
                                   class="inline-flex items-center gap-1 px-3 py-1.5 text-xs font-medium rounded-lg bg-primary hover:bg-primary-dark text-content-inverse transition-colors opacity-0 group-hover:opacity-100 focus:opacity-100">
                                    Trade
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
</svg>
                                </a>
                            </td>
                        </tr>
                                            <tr class="hover:bg-surface-overlay/50 transition-colors group">
                            
                            <td class="px-4 py-3">
                                <div class="flex items-center gap-3">
                                                                            <img src="https://logo.clearbit.com/spglobal.com" alt="" class="w-8 h-8 rounded-full bg-surface-overlay" loading="lazy">
                                                                        <div>
                                        <span class="text-sm font-semibold text-content-primary">S&amp;P 500</span>
                                                                                    <span class="text-xs text-content-tertiary ml-1">SPX</span>
                                                                            </div>
                                </div>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <span class="text-sm font-medium text-content-primary">
                                    $5,175.27
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                                                    <span class="inline-flex items-center gap-1 text-xs font-semibold text-gain">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
</svg>
                                        +0.56%
                                    </span>
                                                            </td>
                            
                            <td class="px-4 py-3">
                                <span class="px-2 py-0.5 text-[10px] font-medium rounded-full bg-surface-overlay text-content-secondary capitalize">
                                    index
                                </span>
                            </td>
                            
                            <td class="px-4 py-3 text-right">
                                <a href="{{ route('user.trade') }}?asset=52"
                                   class="inline-flex items-center gap-1 px-3 py-1.5 text-xs font-medium rounded-lg bg-primary hover:bg-primary-dark text-content-inverse transition-colors opacity-0 group-hover:opacity-100 focus:opacity-100">
                                    Trade
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
</svg>
                                </a>
                            </td>
                        </tr>
                                    </tbody>
            </table>
        </div>

        
        <div class="md:hidden grid grid-cols-1 sm:grid-cols-2 gap-3 mb-6">
                            <a href="{{ route('user.trade') }}?asset=1"
                   class="bg-surface-raised border border-surface-border rounded-xl p-4 hover:bg-surface-overlay/50 transition-colors block">
                    <div class="flex items-center gap-3 mb-3">
                                                    <img src="https://coin-images.coingecko.com/coins/images/1/large/bitcoin.png?1696501400" alt="" class="w-10 h-10 rounded-full bg-surface-overlay" loading="lazy">
                                                <div class="min-w-0 flex-1">
                            <span class="text-sm font-semibold text-content-primary block truncate" title="Bitcoin">Bitcoin</span>
                            <div class="flex items-center gap-2">
                                                                    <span class="text-xs text-content-tertiary">BTC</span>
                                                                <span class="px-1.5 py-0.5 text-[10px] font-medium rounded bg-surface-overlay text-content-tertiary capitalize">crypto</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-end justify-between">
                        <span class="text-lg font-bold text-content-primary">
                            $63,560.00
                        </span>
                                                    <span class="inline-flex items-center gap-0.5 px-2 py-0.5 text-xs font-semibold rounded-full bg-loss/10 text-loss">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6 9 12.75l6.75-6.75M2.25 12.75 9 19.5l6.75-6.75" />
</svg>
                                -0.80%
                            </span>
                                            </div>
                </a>
                            <a href="{{ route('user.trade') }}?asset=2"
                   class="bg-surface-raised border border-surface-border rounded-xl p-4 hover:bg-surface-overlay/50 transition-colors block">
                    <div class="flex items-center gap-3 mb-3">
                                                    <img src="https://coin-images.coingecko.com/coins/images/279/large/ethereum.png?1696501628" alt="" class="w-10 h-10 rounded-full bg-surface-overlay" loading="lazy">
                                                <div class="min-w-0 flex-1">
                            <span class="text-sm font-semibold text-content-primary block truncate" title="Ethereum">Ethereum</span>
                            <div class="flex items-center gap-2">
                                                                    <span class="text-xs text-content-tertiary">ETH</span>
                                                                <span class="px-1.5 py-0.5 text-[10px] font-medium rounded bg-surface-overlay text-content-tertiary capitalize">crypto</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-end justify-between">
                        <span class="text-lg font-bold text-content-primary">
                            $1,897.60
                        </span>
                                                    <span class="inline-flex items-center gap-0.5 px-2 py-0.5 text-xs font-semibold rounded-full bg-gain/10 text-gain">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
</svg>
                                +0.00%
                            </span>
                                            </div>
                </a>
                            <a href="{{ route('user.trade') }}?asset=3"
                   class="bg-surface-raised border border-surface-border rounded-xl p-4 hover:bg-surface-overlay/50 transition-colors block">
                    <div class="flex items-center gap-3 mb-3">
                                                    <img src="https://coin-images.coingecko.com/coins/images/325/large/Tether.png?1696501661" alt="" class="w-10 h-10 rounded-full bg-surface-overlay" loading="lazy">
                                                <div class="min-w-0 flex-1">
                            <span class="text-sm font-semibold text-content-primary block truncate" title="Tether">Tether</span>
                            <div class="flex items-center gap-2">
                                                                    <span class="text-xs text-content-tertiary">USDT</span>
                                                                <span class="px-1.5 py-0.5 text-[10px] font-medium rounded bg-surface-overlay text-content-tertiary capitalize">crypto</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-end justify-between">
                        <span class="text-lg font-bold text-content-primary">
                            $1.00
                        </span>
                                                    <span class="inline-flex items-center gap-0.5 px-2 py-0.5 text-xs font-semibold rounded-full bg-gain/10 text-gain">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
</svg>
                                +0.00%
                            </span>
                                            </div>
                </a>
                            <a href="{{ route('user.trade') }}?asset=4"
                   class="bg-surface-raised border border-surface-border rounded-xl p-4 hover:bg-surface-overlay/50 transition-colors block">
                    <div class="flex items-center gap-3 mb-3">
                                                    <img src="https://coin-images.coingecko.com/coins/images/825/large/bnb-icon2_2x.png?1696501970" alt="" class="w-10 h-10 rounded-full bg-surface-overlay" loading="lazy">
                                                <div class="min-w-0 flex-1">
                            <span class="text-sm font-semibold text-content-primary block truncate" title="BNB">BNB</span>
                            <div class="flex items-center gap-2">
                                                                    <span class="text-xs text-content-tertiary">BNB</span>
                                                                <span class="px-1.5 py-0.5 text-[10px] font-medium rounded bg-surface-overlay text-content-tertiary capitalize">crypto</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-end justify-between">
                        <span class="text-lg font-bold text-content-primary">
                            $567.54
                        </span>
                                                    <span class="inline-flex items-center gap-0.5 px-2 py-0.5 text-xs font-semibold rounded-full bg-gain/10 text-gain">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
</svg>
                                +0.70%
                            </span>
                                            </div>
                </a>
                            <a href="{{ route('user.trade') }}?asset=7"
                   class="bg-surface-raised border border-surface-border rounded-xl p-4 hover:bg-surface-overlay/50 transition-colors block">
                    <div class="flex items-center gap-3 mb-3">
                                                    <img src="https://coin-images.coingecko.com/coins/images/6319/large/USDC.png?1769615602" alt="" class="w-10 h-10 rounded-full bg-surface-overlay" loading="lazy">
                                                <div class="min-w-0 flex-1">
                            <span class="text-sm font-semibold text-content-primary block truncate" title="USDC">USDC</span>
                            <div class="flex items-center gap-2">
                                                                    <span class="text-xs text-content-tertiary">USDC</span>
                                                                <span class="px-1.5 py-0.5 text-[10px] font-medium rounded bg-surface-overlay text-content-tertiary capitalize">crypto</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-end justify-between">
                        <span class="text-lg font-bold text-content-primary">
                            $1.00
                        </span>
                                                    <span class="inline-flex items-center gap-0.5 px-2 py-0.5 text-xs font-semibold rounded-full bg-gain/10 text-gain">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
</svg>
                                +0.00%
                            </span>
                                            </div>
                </a>
                            <a href="{{ route('user.trade') }}?asset=6"
                   class="bg-surface-raised border border-surface-border rounded-xl p-4 hover:bg-surface-overlay/50 transition-colors block">
                    <div class="flex items-center gap-3 mb-3">
                                                    <img src="https://coin-images.coingecko.com/coins/images/44/large/xrp-symbol-white-128.png?1696501442" alt="" class="w-10 h-10 rounded-full bg-surface-overlay" loading="lazy">
                                                <div class="min-w-0 flex-1">
                            <span class="text-sm font-semibold text-content-primary block truncate" title="XRP">XRP</span>
                            <div class="flex items-center gap-2">
                                                                    <span class="text-xs text-content-tertiary">XRP</span>
                                                                <span class="px-1.5 py-0.5 text-[10px] font-medium rounded bg-surface-overlay text-content-tertiary capitalize">crypto</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-end justify-between">
                        <span class="text-lg font-bold text-content-primary">
                            $1.06
                        </span>
                                                    <span class="inline-flex items-center gap-0.5 px-2 py-0.5 text-xs font-semibold rounded-full bg-loss/10 text-loss">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6 9 12.75l6.75-6.75M2.25 12.75 9 19.5l6.75-6.75" />
</svg>
                                -1.90%
                            </span>
                                            </div>
                </a>
                            <a href="{{ route('user.trade') }}?asset=5"
                   class="bg-surface-raised border border-surface-border rounded-xl p-4 hover:bg-surface-overlay/50 transition-colors block">
                    <div class="flex items-center gap-3 mb-3">
                                                    <img src="https://coin-images.coingecko.com/coins/images/4128/large/solana.png?1718769756" alt="" class="w-10 h-10 rounded-full bg-surface-overlay" loading="lazy">
                                                <div class="min-w-0 flex-1">
                            <span class="text-sm font-semibold text-content-primary block truncate" title="Solana">Solana</span>
                            <div class="flex items-center gap-2">
                                                                    <span class="text-xs text-content-tertiary">SOL</span>
                                                                <span class="px-1.5 py-0.5 text-[10px] font-medium rounded bg-surface-overlay text-content-tertiary capitalize">crypto</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-end justify-between">
                        <span class="text-lg font-bold text-content-primary">
                            $73.67
                        </span>
                                                    <span class="inline-flex items-center gap-0.5 px-2 py-0.5 text-xs font-semibold rounded-full bg-loss/10 text-loss">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6 9 12.75l6.75-6.75M2.25 12.75 9 19.5l6.75-6.75" />
</svg>
                                -1.00%
                            </span>
                                            </div>
                </a>
                            <a href="{{ route('user.trade') }}?asset=10"
                   class="bg-surface-raised border border-surface-border rounded-xl p-4 hover:bg-surface-overlay/50 transition-colors block">
                    <div class="flex items-center gap-3 mb-3">
                                                    <img src="https://coin-images.coingecko.com/coins/images/1094/large/photo_2026-04-13_09-59-16.png?1776048311" alt="" class="w-10 h-10 rounded-full bg-surface-overlay" loading="lazy">
                                                <div class="min-w-0 flex-1">
                            <span class="text-sm font-semibold text-content-primary block truncate" title="TRON">TRON</span>
                            <div class="flex items-center gap-2">
                                                                    <span class="text-xs text-content-tertiary">TRX</span>
                                                                <span class="px-1.5 py-0.5 text-[10px] font-medium rounded bg-surface-overlay text-content-tertiary capitalize">crypto</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-end justify-between">
                        <span class="text-lg font-bold text-content-primary">
                            $0.32
                        </span>
                                                    <span class="inline-flex items-center gap-0.5 px-2 py-0.5 text-xs font-semibold rounded-full bg-loss/10 text-loss">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6 9 12.75l6.75-6.75M2.25 12.75 9 19.5l6.75-6.75" />
</svg>
                                -1.30%
                            </span>
                                            </div>
                </a>
                            <a href="{{ route('user.trade') }}?asset=60"
                   class="bg-surface-raised border border-surface-border rounded-xl p-4 hover:bg-surface-overlay/50 transition-colors block">
                    <div class="flex items-center gap-3 mb-3">
                                                    <img src="https://coin-images.coingecko.com/coins/images/68480/large/figure.png?1755863954" alt="" class="w-10 h-10 rounded-full bg-surface-overlay" loading="lazy">
                                                <div class="min-w-0 flex-1">
                            <span class="text-sm font-semibold text-content-primary block truncate" title="Figure Heloc">Figure Heloc</span>
                            <div class="flex items-center gap-2">
                                                                    <span class="text-xs text-content-tertiary">FIGR_HELOC</span>
                                                                <span class="px-1.5 py-0.5 text-[10px] font-medium rounded bg-surface-overlay text-content-tertiary capitalize">crypto</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-end justify-between">
                        <span class="text-lg font-bold text-content-primary">
                            $1.03
                        </span>
                                                    <span class="inline-flex items-center gap-0.5 px-2 py-0.5 text-xs font-semibold rounded-full bg-gain/10 text-gain">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
</svg>
                                +2.50%
                            </span>
                                            </div>
                </a>
                            <a href="{{ route('user.trade') }}?asset=61"
                   class="bg-surface-raised border border-surface-border rounded-xl p-4 hover:bg-surface-overlay/50 transition-colors block">
                    <div class="flex items-center gap-3 mb-3">
                                                    <img src="https://coin-images.coingecko.com/coins/images/27045/large/wbt_token.png?1696526096" alt="" class="w-10 h-10 rounded-full bg-surface-overlay" loading="lazy">
                                                <div class="min-w-0 flex-1">
                            <span class="text-sm font-semibold text-content-primary block truncate" title="WhiteBIT Coin">WhiteBIT Coin</span>
                            <div class="flex items-center gap-2">
                                                                    <span class="text-xs text-content-tertiary">WBT</span>
                                                                <span class="px-1.5 py-0.5 text-[10px] font-medium rounded bg-surface-overlay text-content-tertiary capitalize">crypto</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-end justify-between">
                        <span class="text-lg font-bold text-content-primary">
                            $55.72
                        </span>
                                                    <span class="inline-flex items-center gap-0.5 px-2 py-0.5 text-xs font-semibold rounded-full bg-loss/10 text-loss">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6 9 12.75l6.75-6.75M2.25 12.75 9 19.5l6.75-6.75" />
</svg>
                                -0.70%
                            </span>
                                            </div>
                </a>
                            <a href="{{ route('user.trade') }}?asset=64"
                   class="bg-surface-raised border border-surface-border rounded-xl p-4 hover:bg-surface-overlay/50 transition-colors block">
                    <div class="flex items-center gap-3 mb-3">
                                                    <img src="https://coin-images.coingecko.com/coins/images/50882/large/hyperliquid.jpg?1729431300" alt="" class="w-10 h-10 rounded-full bg-surface-overlay" loading="lazy">
                                                <div class="min-w-0 flex-1">
                            <span class="text-sm font-semibold text-content-primary block truncate" title="Hyperliquid">Hyperliquid</span>
                            <div class="flex items-center gap-2">
                                                                    <span class="text-xs text-content-tertiary">HYPE</span>
                                                                <span class="px-1.5 py-0.5 text-[10px] font-medium rounded bg-surface-overlay text-content-tertiary capitalize">crypto</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-end justify-between">
                        <span class="text-lg font-bold text-content-primary">
                            $55.23
                        </span>
                                                    <span class="inline-flex items-center gap-0.5 px-2 py-0.5 text-xs font-semibold rounded-full bg-loss/10 text-loss">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6 9 12.75l6.75-6.75M2.25 12.75 9 19.5l6.75-6.75" />
</svg>
                                -2.80%
                            </span>
                                            </div>
                </a>
                            <a href="{{ route('user.trade') }}?asset=9"
                   class="bg-surface-raised border border-surface-border rounded-xl p-4 hover:bg-surface-overlay/50 transition-colors block">
                    <div class="flex items-center gap-3 mb-3">
                                                    <img src="https://coin-images.coingecko.com/coins/images/5/large/dogecoin.png?1696501409" alt="" class="w-10 h-10 rounded-full bg-surface-overlay" loading="lazy">
                                                <div class="min-w-0 flex-1">
                            <span class="text-sm font-semibold text-content-primary block truncate" title="Dogecoin">Dogecoin</span>
                            <div class="flex items-center gap-2">
                                                                    <span class="text-xs text-content-tertiary">DOGE</span>
                                                                <span class="px-1.5 py-0.5 text-[10px] font-medium rounded bg-surface-overlay text-content-tertiary capitalize">crypto</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-end justify-between">
                        <span class="text-lg font-bold text-content-primary">
                            $0.07
                        </span>
                                                    <span class="inline-flex items-center gap-0.5 px-2 py-0.5 text-xs font-semibold rounded-full bg-gain/10 text-gain">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
</svg>
                                +0.00%
                            </span>
                                            </div>
                </a>
                            <a href="{{ route('user.trade') }}?asset=62"
                   class="bg-surface-raised border border-surface-border rounded-xl p-4 hover:bg-surface-overlay/50 transition-colors block">
                    <div class="flex items-center gap-3 mb-3">
                                                    <img src="https://coin-images.coingecko.com/coins/images/39926/large/usds.webp?1726666683" alt="" class="w-10 h-10 rounded-full bg-surface-overlay" loading="lazy">
                                                <div class="min-w-0 flex-1">
                            <span class="text-sm font-semibold text-content-primary block truncate" title="USDS">USDS</span>
                            <div class="flex items-center gap-2">
                                                                    <span class="text-xs text-content-tertiary">USDS</span>
                                                                <span class="px-1.5 py-0.5 text-[10px] font-medium rounded bg-surface-overlay text-content-tertiary capitalize">crypto</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-end justify-between">
                        <span class="text-lg font-bold text-content-primary">
                            $1.00
                        </span>
                                                    <span class="inline-flex items-center gap-0.5 px-2 py-0.5 text-xs font-semibold rounded-full bg-gain/10 text-gain">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
</svg>
                                +0.00%
                            </span>
                                            </div>
                </a>
                            <a href="{{ route('user.trade') }}?asset=71"
                   class="bg-surface-raised border border-surface-border rounded-xl p-4 hover:bg-surface-overlay/50 transition-colors block">
                    <div class="flex items-center gap-3 mb-3">
                                                    <img src="https://coin-images.coingecko.com/coins/images/69134/large/Rain_logo_1_.png?1762952191" alt="" class="w-10 h-10 rounded-full bg-surface-overlay" loading="lazy">
                                                <div class="min-w-0 flex-1">
                            <span class="text-sm font-semibold text-content-primary block truncate" title="Rain">Rain</span>
                            <div class="flex items-center gap-2">
                                                                    <span class="text-xs text-content-tertiary">RAIN</span>
                                                                <span class="px-1.5 py-0.5 text-[10px] font-medium rounded bg-surface-overlay text-content-tertiary capitalize">crypto</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-end justify-between">
                        <span class="text-lg font-bold text-content-primary">
                            $0.01
                        </span>
                                                    <span class="inline-flex items-center gap-0.5 px-2 py-0.5 text-xs font-semibold rounded-full bg-gain/10 text-gain">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
</svg>
                                +1.00%
                            </span>
                                            </div>
                </a>
                            <a href="{{ route('user.trade') }}?asset=65"
                   class="bg-surface-raised border border-surface-border rounded-xl p-4 hover:bg-surface-overlay/50 transition-colors block">
                    <div class="flex items-center gap-3 mb-3">
                                                    <img src="https://coin-images.coingecko.com/coins/images/8418/large/leo-token.png?1696508607" alt="" class="w-10 h-10 rounded-full bg-surface-overlay" loading="lazy">
                                                <div class="min-w-0 flex-1">
                            <span class="text-sm font-semibold text-content-primary block truncate" title="LEO Token">LEO Token</span>
                            <div class="flex items-center gap-2">
                                                                    <span class="text-xs text-content-tertiary">LEO</span>
                                                                <span class="px-1.5 py-0.5 text-[10px] font-medium rounded bg-surface-overlay text-content-tertiary capitalize">crypto</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-end justify-between">
                        <span class="text-lg font-bold text-content-primary">
                            $9.75
                        </span>
                                                    <span class="inline-flex items-center gap-0.5 px-2 py-0.5 text-xs font-semibold rounded-full bg-gain/10 text-gain">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
</svg>
                                +0.80%
                            </span>
                                            </div>
                </a>
                            <a href="{{ route('user.trade') }}?asset=76"
                   class="bg-surface-raised border border-surface-border rounded-xl p-4 hover:bg-surface-overlay/50 transition-colors block">
                    <div class="flex items-center gap-3 mb-3">
                                                    <img src="https://coin-images.coingecko.com/coins/images/486/large/circle-zcash-color.png?1696501740" alt="" class="w-10 h-10 rounded-full bg-surface-overlay" loading="lazy">
                                                <div class="min-w-0 flex-1">
                            <span class="text-sm font-semibold text-content-primary block truncate" title="Zcash">Zcash</span>
                            <div class="flex items-center gap-2">
                                                                    <span class="text-xs text-content-tertiary">ZEC</span>
                                                                <span class="px-1.5 py-0.5 text-[10px] font-medium rounded bg-surface-overlay text-content-tertiary capitalize">crypto</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-end justify-between">
                        <span class="text-lg font-bold text-content-primary">
                            $464.22
                        </span>
                                                    <span class="inline-flex items-center gap-0.5 px-2 py-0.5 text-xs font-semibold rounded-full bg-loss/10 text-loss">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6 9 12.75l6.75-6.75M2.25 12.75 9 19.5l6.75-6.75" />
</svg>
                                -1.50%
                            </span>
                                            </div>
                </a>
                            <a href="{{ route('user.trade') }}?asset=66"
                   class="bg-surface-raised border border-surface-border rounded-xl p-4 hover:bg-surface-overlay/50 transition-colors block">
                    <div class="flex items-center gap-3 mb-3">
                                                    <img src="https://coin-images.coingecko.com/coins/images/69/large/monero_logo.png?1696501460" alt="" class="w-10 h-10 rounded-full bg-surface-overlay" loading="lazy">
                                                <div class="min-w-0 flex-1">
                            <span class="text-sm font-semibold text-content-primary block truncate" title="Monero">Monero</span>
                            <div class="flex items-center gap-2">
                                                                    <span class="text-xs text-content-tertiary">XMR</span>
                                                                <span class="px-1.5 py-0.5 text-[10px] font-medium rounded bg-surface-overlay text-content-tertiary capitalize">crypto</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-end justify-between">
                        <span class="text-lg font-bold text-content-primary">
                            $335.94
                        </span>
                                                    <span class="inline-flex items-center gap-0.5 px-2 py-0.5 text-xs font-semibold rounded-full bg-loss/10 text-loss">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6 9 12.75l6.75-6.75M2.25 12.75 9 19.5l6.75-6.75" />
</svg>
                                -1.90%
                            </span>
                                            </div>
                </a>
                            <a href="{{ route('user.trade') }}?asset=12"
                   class="bg-surface-raised border border-surface-border rounded-xl p-4 hover:bg-surface-overlay/50 transition-colors block">
                    <div class="flex items-center gap-3 mb-3">
                                                    <img src="https://coin-images.coingecko.com/coins/images/877/large/Chainlink_Logo_500.png?1760023405" alt="" class="w-10 h-10 rounded-full bg-surface-overlay" loading="lazy">
                                                <div class="min-w-0 flex-1">
                            <span class="text-sm font-semibold text-content-primary block truncate" title="Chainlink">Chainlink</span>
                            <div class="flex items-center gap-2">
                                                                    <span class="text-xs text-content-tertiary">LINK</span>
                                                                <span class="px-1.5 py-0.5 text-[10px] font-medium rounded bg-surface-overlay text-content-tertiary capitalize">crypto</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-end justify-between">
                        <span class="text-lg font-bold text-content-primary">
                            $8.32
                        </span>
                                                    <span class="inline-flex items-center gap-0.5 px-2 py-0.5 text-xs font-semibold rounded-full bg-loss/10 text-loss">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6 9 12.75l6.75-6.75M2.25 12.75 9 19.5l6.75-6.75" />
</svg>
                                -1.80%
                            </span>
                                            </div>
                </a>
                            <a href="{{ route('user.trade') }}?asset=8"
                   class="bg-surface-raised border border-surface-border rounded-xl p-4 hover:bg-surface-overlay/50 transition-colors block">
                    <div class="flex items-center gap-3 mb-3">
                                                    <img src="https://coin-images.coingecko.com/coins/images/975/large/cardano.png?1696502090" alt="" class="w-10 h-10 rounded-full bg-surface-overlay" loading="lazy">
                                                <div class="min-w-0 flex-1">
                            <span class="text-sm font-semibold text-content-primary block truncate" title="Cardano">Cardano</span>
                            <div class="flex items-center gap-2">
                                                                    <span class="text-xs text-content-tertiary">ADA</span>
                                                                <span class="px-1.5 py-0.5 text-[10px] font-medium rounded bg-surface-overlay text-content-tertiary capitalize">crypto</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-end justify-between">
                        <span class="text-lg font-bold text-content-primary">
                            $0.16
                        </span>
                                                    <span class="inline-flex items-center gap-0.5 px-2 py-0.5 text-xs font-semibold rounded-full bg-gain/10 text-gain">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
</svg>
                                +1.00%
                            </span>
                                            </div>
                </a>
                            <a href="{{ route('user.trade') }}?asset=69"
                   class="bg-surface-raised border border-surface-border rounded-xl p-4 hover:bg-surface-overlay/50 transition-colors block">
                    <div class="flex items-center gap-3 mb-3">
                                                    <img src="https://coin-images.coingecko.com/coins/images/100/large/fmpFRHHQ_400x400.jpg?1735231350" alt="" class="w-10 h-10 rounded-full bg-surface-overlay" loading="lazy">
                                                <div class="min-w-0 flex-1">
                            <span class="text-sm font-semibold text-content-primary block truncate" title="Stellar">Stellar</span>
                            <div class="flex items-center gap-2">
                                                                    <span class="text-xs text-content-tertiary">XLM</span>
                                                                <span class="px-1.5 py-0.5 text-[10px] font-medium rounded bg-surface-overlay text-content-tertiary capitalize">crypto</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-end justify-between">
                        <span class="text-lg font-bold text-content-primary">
                            $0.17
                        </span>
                                                    <span class="inline-flex items-center gap-0.5 px-2 py-0.5 text-xs font-semibold rounded-full bg-loss/10 text-loss">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6 9 12.75l6.75-6.75M2.25 12.75 9 19.5l6.75-6.75" />
</svg>
                                -1.30%
                            </span>
                                            </div>
                </a>
                            <a href="{{ route('user.trade') }}?asset=72"
                   class="bg-surface-raised border border-surface-border rounded-xl p-4 hover:bg-surface-overlay/50 transition-colors block">
                    <div class="flex items-center gap-3 mb-3">
                                                    <img src="https://coin-images.coingecko.com/coins/images/9956/large/Badge_Dai.png?1696509996" alt="" class="w-10 h-10 rounded-full bg-surface-overlay" loading="lazy">
                                                <div class="min-w-0 flex-1">
                            <span class="text-sm font-semibold text-content-primary block truncate" title="Dai">Dai</span>
                            <div class="flex items-center gap-2">
                                                                    <span class="text-xs text-content-tertiary">DAI</span>
                                                                <span class="px-1.5 py-0.5 text-[10px] font-medium rounded bg-surface-overlay text-content-tertiary capitalize">crypto</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-end justify-between">
                        <span class="text-lg font-bold text-content-primary">
                            $1.00
                        </span>
                                                    <span class="inline-flex items-center gap-0.5 px-2 py-0.5 text-xs font-semibold rounded-full bg-gain/10 text-gain">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
</svg>
                                +0.00%
                            </span>
                                            </div>
                </a>
                            <a href="{{ route('user.trade') }}?asset=68"
                   class="bg-surface-raised border border-surface-border rounded-xl p-4 hover:bg-surface-overlay/50 transition-colors block">
                    <div class="flex items-center gap-3 mb-3">
                                                    <img src="https://coin-images.coingecko.com/coins/images/70468/large/Canton-Ticker_%281%29.png?1762826299" alt="" class="w-10 h-10 rounded-full bg-surface-overlay" loading="lazy">
                                                <div class="min-w-0 flex-1">
                            <span class="text-sm font-semibold text-content-primary block truncate" title="Canton">Canton</span>
                            <div class="flex items-center gap-2">
                                                                    <span class="text-xs text-content-tertiary">CC</span>
                                                                <span class="px-1.5 py-0.5 text-[10px] font-medium rounded bg-surface-overlay text-content-tertiary capitalize">crypto</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-end justify-between">
                        <span class="text-lg font-bold text-content-primary">
                            $0.12
                        </span>
                                                    <span class="inline-flex items-center gap-0.5 px-2 py-0.5 text-xs font-semibold rounded-full bg-loss/10 text-loss">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6 9 12.75l6.75-6.75M2.25 12.75 9 19.5l6.75-6.75" />
</svg>
                                -2.80%
                            </span>
                                            </div>
                </a>
                            <a href="{{ route('user.trade') }}?asset=63"
                   class="bg-surface-raised border border-surface-border rounded-xl p-4 hover:bg-surface-overlay/50 transition-colors block">
                    <div class="flex items-center gap-3 mb-3">
                                                    <img src="https://coin-images.coingecko.com/coins/images/780/large/bitcoin-cash-circle.png?1696501932" alt="" class="w-10 h-10 rounded-full bg-surface-overlay" loading="lazy">
                                                <div class="min-w-0 flex-1">
                            <span class="text-sm font-semibold text-content-primary block truncate" title="Bitcoin Cash">Bitcoin Cash</span>
                            <div class="flex items-center gap-2">
                                                                    <span class="text-xs text-content-tertiary">BCH</span>
                                                                <span class="px-1.5 py-0.5 text-[10px] font-medium rounded bg-surface-overlay text-content-tertiary capitalize">crypto</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-end justify-between">
                        <span class="text-lg font-bold text-content-primary">
                            $212.61
                        </span>
                                                    <span class="inline-flex items-center gap-0.5 px-2 py-0.5 text-xs font-semibold rounded-full bg-loss/10 text-loss">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6 9 12.75l6.75-6.75M2.25 12.75 9 19.5l6.75-6.75" />
</svg>
                                -0.70%
                            </span>
                                            </div>
                </a>
                            <a href="{{ route('user.trade') }}?asset=70"
                   class="bg-surface-raised border border-surface-border rounded-xl p-4 hover:bg-surface-overlay/50 transition-colors block">
                    <div class="flex items-center gap-3 mb-3">
                                                    <img src="https://coin-images.coingecko.com/coins/images/54977/large/USD1_1000x1000_transparent.png?1749297002" alt="" class="w-10 h-10 rounded-full bg-surface-overlay" loading="lazy">
                                                <div class="min-w-0 flex-1">
                            <span class="text-sm font-semibold text-content-primary block truncate" title="USD1">USD1</span>
                            <div class="flex items-center gap-2">
                                                                    <span class="text-xs text-content-tertiary">USD1</span>
                                                                <span class="px-1.5 py-0.5 text-[10px] font-medium rounded bg-surface-overlay text-content-tertiary capitalize">crypto</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-end justify-between">
                        <span class="text-lg font-bold text-content-primary">
                            $1.00
                        </span>
                                                    <span class="inline-flex items-center gap-0.5 px-2 py-0.5 text-xs font-semibold rounded-full bg-gain/10 text-gain">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
</svg>
                                +0.00%
                            </span>
                                            </div>
                </a>
                            <a href="{{ route('user.trade') }}?asset=78"
                   class="bg-surface-raised border border-surface-border rounded-xl p-4 hover:bg-surface-overlay/50 transition-colors block">
                    <div class="flex items-center gap-3 mb-3">
                                                    <img src="https://coin-images.coingecko.com/coins/images/17980/large/Gram_Circular_Badge.png?1781524778" alt="" class="w-10 h-10 rounded-full bg-surface-overlay" loading="lazy">
                                                <div class="min-w-0 flex-1">
                            <span class="text-sm font-semibold text-content-primary block truncate" title="Gram (prev. Toncoin)">Gram (prev. Toncoin)</span>
                            <div class="flex items-center gap-2">
                                                                    <span class="text-xs text-content-tertiary">GRAM</span>
                                                                <span class="px-1.5 py-0.5 text-[10px] font-medium rounded bg-surface-overlay text-content-tertiary capitalize">crypto</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-end justify-between">
                        <span class="text-lg font-bold text-content-primary">
                            $1.45
                        </span>
                                                    <span class="inline-flex items-center gap-0.5 px-2 py-0.5 text-xs font-semibold rounded-full bg-loss/10 text-loss">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6 9 12.75l6.75-6.75M2.25 12.75 9 19.5l6.75-6.75" />
</svg>
                                -0.90%
                            </span>
                                            </div>
                </a>
                            <a href="{{ route('user.trade') }}?asset=67"
                   class="bg-surface-raised border border-surface-border rounded-xl p-4 hover:bg-surface-overlay/50 transition-colors block">
                    <div class="flex items-center gap-3 mb-3">
                                                    <img src="https://coin-images.coingecko.com/coins/images/33613/large/usde.png?1733810059" alt="" class="w-10 h-10 rounded-full bg-surface-overlay" loading="lazy">
                                                <div class="min-w-0 flex-1">
                            <span class="text-sm font-semibold text-content-primary block truncate" title="Ethena USDe">Ethena USDe</span>
                            <div class="flex items-center gap-2">
                                                                    <span class="text-xs text-content-tertiary">USDE</span>
                                                                <span class="px-1.5 py-0.5 text-[10px] font-medium rounded bg-surface-overlay text-content-tertiary capitalize">crypto</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-end justify-between">
                        <span class="text-lg font-bold text-content-primary">
                            $1.00
                        </span>
                                                    <span class="inline-flex items-center gap-0.5 px-2 py-0.5 text-xs font-semibold rounded-full bg-gain/10 text-gain">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
</svg>
                                +0.00%
                            </span>
                                            </div>
                </a>
                            <a href="{{ route('user.trade') }}?asset=15"
                   class="bg-surface-raised border border-surface-border rounded-xl p-4 hover:bg-surface-overlay/50 transition-colors block">
                    <div class="flex items-center gap-3 mb-3">
                                                    <img src="https://coin-images.coingecko.com/coins/images/2/large/litecoin.png?1696501400" alt="" class="w-10 h-10 rounded-full bg-surface-overlay" loading="lazy">
                                                <div class="min-w-0 flex-1">
                            <span class="text-sm font-semibold text-content-primary block truncate" title="Litecoin">Litecoin</span>
                            <div class="flex items-center gap-2">
                                                                    <span class="text-xs text-content-tertiary">LTC</span>
                                                                <span class="px-1.5 py-0.5 text-[10px] font-medium rounded bg-surface-overlay text-content-tertiary capitalize">crypto</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-end justify-between">
                        <span class="text-lg font-bold text-content-primary">
                            $46.25
                        </span>
                                                    <span class="inline-flex items-center gap-0.5 px-2 py-0.5 text-xs font-semibold rounded-full bg-gain/10 text-gain">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
</svg>
                                +0.50%
                            </span>
                                            </div>
                </a>
                            <a href="{{ route('user.trade') }}?asset=84"
                   class="bg-surface-raised border border-surface-border rounded-xl p-4 hover:bg-surface-overlay/50 transition-colors block">
                    <div class="flex items-center gap-3 mb-3">
                                                    <img src="https://coin-images.coingecko.com/coins/images/51281/large/GDN_USDG_Token_200x200.png?1730484111" alt="" class="w-10 h-10 rounded-full bg-surface-overlay" loading="lazy">
                                                <div class="min-w-0 flex-1">
                            <span class="text-sm font-semibold text-content-primary block truncate" title="Global Dollar">Global Dollar</span>
                            <div class="flex items-center gap-2">
                                                                    <span class="text-xs text-content-tertiary">USDG</span>
                                                                <span class="px-1.5 py-0.5 text-[10px] font-medium rounded bg-surface-overlay text-content-tertiary capitalize">crypto</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-end justify-between">
                        <span class="text-lg font-bold text-content-primary">
                            $1.00
                        </span>
                                                    <span class="inline-flex items-center gap-0.5 px-2 py-0.5 text-xs font-semibold rounded-full bg-loss/10 text-loss">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6 9 12.75l6.75-6.75M2.25 12.75 9 19.5l6.75-6.75" />
</svg>
                                -0.10%
                            </span>
                                            </div>
                </a>
                            <a href="{{ route('user.trade') }}?asset=83"
                   class="bg-surface-raised border border-surface-border rounded-xl p-4 hover:bg-surface-overlay/50 transition-colors block">
                    <div class="flex items-center gap-3 mb-3">
                                                    <img src="https://coin-images.coingecko.com/coins/images/28452/large/ARUsPeNQ_400x400.jpeg?1696527447" alt="" class="w-10 h-10 rounded-full bg-surface-overlay" loading="lazy">
                                                <div class="min-w-0 flex-1">
                            <span class="text-sm font-semibold text-content-primary block truncate" title="Bittensor">Bittensor</span>
                            <div class="flex items-center gap-2">
                                                                    <span class="text-xs text-content-tertiary">TAO</span>
                                                                <span class="px-1.5 py-0.5 text-[10px] font-medium rounded bg-surface-overlay text-content-tertiary capitalize">crypto</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-end justify-between">
                        <span class="text-lg font-bold text-content-primary">
                            $335.37
                        </span>
                                                    <span class="inline-flex items-center gap-0.5 px-2 py-0.5 text-xs font-semibold rounded-full bg-loss/10 text-loss">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6 9 12.75l6.75-6.75M2.25 12.75 9 19.5l6.75-6.75" />
</svg>
                                -0.04%
                            </span>
                                            </div>
                </a>
                            <a href="{{ route('user.trade') }}?asset=73"
                   class="bg-surface-raised border border-surface-border rounded-xl p-4 hover:bg-surface-overlay/50 transition-colors block">
                    <div class="flex items-center gap-3 mb-3">
                                                    <img src="https://coin-images.coingecko.com/coins/images/3688/large/hbar.png?1696504364" alt="" class="w-10 h-10 rounded-full bg-surface-overlay" loading="lazy">
                                                <div class="min-w-0 flex-1">
                            <span class="text-sm font-semibold text-content-primary block truncate" title="Hedera">Hedera</span>
                            <div class="flex items-center gap-2">
                                                                    <span class="text-xs text-content-tertiary">HBAR</span>
                                                                <span class="px-1.5 py-0.5 text-[10px] font-medium rounded bg-surface-overlay text-content-tertiary capitalize">crypto</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-end justify-between">
                        <span class="text-lg font-bold text-content-primary">
                            $0.07
                        </span>
                                                    <span class="inline-flex items-center gap-0.5 px-2 py-0.5 text-xs font-semibold rounded-full bg-gain/10 text-gain">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
</svg>
                                +1.20%
                            </span>
                                            </div>
                </a>
                            <a href="{{ route('user.trade') }}?asset=81"
                   class="bg-surface-raised border border-surface-border rounded-xl p-4 hover:bg-surface-overlay/50 transition-colors block">
                    <div class="flex items-center gap-3 mb-3">
                                                    <img src="https://coin-images.coingecko.com/coins/images/50767/large/wlfi.png?1756438915" alt="" class="w-10 h-10 rounded-full bg-surface-overlay" loading="lazy">
                                                <div class="min-w-0 flex-1">
                            <span class="text-sm font-semibold text-content-primary block truncate" title="World Liberty Financial">World Liberty Financial</span>
                            <div class="flex items-center gap-2">
                                                                    <span class="text-xs text-content-tertiary">WLFI</span>
                                                                <span class="px-1.5 py-0.5 text-[10px] font-medium rounded bg-surface-overlay text-content-tertiary capitalize">crypto</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-end justify-between">
                        <span class="text-lg font-bold text-content-primary">
                            $0.09
                        </span>
                                                    <span class="inline-flex items-center gap-0.5 px-2 py-0.5 text-xs font-semibold rounded-full bg-loss/10 text-loss">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6 9 12.75l6.75-6.75M2.25 12.75 9 19.5l6.75-6.75" />
</svg>
                                -3.03%
                            </span>
                                            </div>
                </a>
                            <a href="{{ route('user.trade') }}?asset=85"
                   class="bg-surface-raised border border-surface-border rounded-xl p-4 hover:bg-surface-overlay/50 transition-colors block">
                    <div class="flex items-center gap-3 mb-3">
                                                    <img src="https://coin-images.coingecko.com/coins/images/51054/large/Hashnote_SDYC_200x200.png?1730370965" alt="" class="w-10 h-10 rounded-full bg-surface-overlay" loading="lazy">
                                                <div class="min-w-0 flex-1">
                            <span class="text-sm font-semibold text-content-primary block truncate" title="Circle USYC">Circle USYC</span>
                            <div class="flex items-center gap-2">
                                                                    <span class="text-xs text-content-tertiary">USYC</span>
                                                                <span class="px-1.5 py-0.5 text-[10px] font-medium rounded bg-surface-overlay text-content-tertiary capitalize">crypto</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-end justify-between">
                        <span class="text-lg font-bold text-content-primary">
                            $1.13
                        </span>
                                                    <span class="inline-flex items-center gap-0.5 px-2 py-0.5 text-xs font-semibold rounded-full bg-gain/10 text-gain">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
</svg>
                                +0.00%
                            </span>
                                            </div>
                </a>
                            <a href="{{ route('user.trade') }}?asset=13"
                   class="bg-surface-raised border border-surface-border rounded-xl p-4 hover:bg-surface-overlay/50 transition-colors block">
                    <div class="flex items-center gap-3 mb-3">
                                                    <img src="https://coin-images.coingecko.com/coins/images/12559/large/Avalanche_Circle_RedWhite_Trans.png?1696512369" alt="" class="w-10 h-10 rounded-full bg-surface-overlay" loading="lazy">
                                                <div class="min-w-0 flex-1">
                            <span class="text-sm font-semibold text-content-primary block truncate" title="Avalanche">Avalanche</span>
                            <div class="flex items-center gap-2">
                                                                    <span class="text-xs text-content-tertiary">AVAX</span>
                                                                <span class="px-1.5 py-0.5 text-[10px] font-medium rounded bg-surface-overlay text-content-tertiary capitalize">crypto</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-end justify-between">
                        <span class="text-lg font-bold text-content-primary">
                            $6.51
                        </span>
                                                    <span class="inline-flex items-center gap-0.5 px-2 py-0.5 text-xs font-semibold rounded-full bg-gain/10 text-gain">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
</svg>
                                +0.30%
                            </span>
                                            </div>
                </a>
                            <a href="{{ route('user.trade') }}?asset=75"
                   class="bg-surface-raised border border-surface-border rounded-xl p-4 hover:bg-surface-overlay/50 transition-colors block">
                    <div class="flex items-center gap-3 mb-3">
                                                    <img src="https://coin-images.coingecko.com/coins/images/26375/large/sui-ocean-square.png?1727791290" alt="" class="w-10 h-10 rounded-full bg-surface-overlay" loading="lazy">
                                                <div class="min-w-0 flex-1">
                            <span class="text-sm font-semibold text-content-primary block truncate" title="Sui">Sui</span>
                            <div class="flex items-center gap-2">
                                                                    <span class="text-xs text-content-tertiary">SUI</span>
                                                                <span class="px-1.5 py-0.5 text-[10px] font-medium rounded bg-surface-overlay text-content-tertiary capitalize">crypto</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-end justify-between">
                        <span class="text-lg font-bold text-content-primary">
                            $0.69
                        </span>
                                                    <span class="inline-flex items-center gap-0.5 px-2 py-0.5 text-xs font-semibold rounded-full bg-loss/10 text-loss">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6 9 12.75l6.75-6.75M2.25 12.75 9 19.5l6.75-6.75" />
</svg>
                                -1.00%
                            </span>
                                            </div>
                </a>
                            <a href="{{ route('user.trade') }}?asset=77"
                   class="bg-surface-raised border border-surface-border rounded-xl p-4 hover:bg-surface-overlay/50 transition-colors block">
                    <div class="flex items-center gap-3 mb-3">
                                                    <img src="https://coin-images.coingecko.com/coins/images/11939/large/shiba.png?1696511800" alt="" class="w-10 h-10 rounded-full bg-surface-overlay" loading="lazy">
                                                <div class="min-w-0 flex-1">
                            <span class="text-sm font-semibold text-content-primary block truncate" title="Shiba Inu">Shiba Inu</span>
                            <div class="flex items-center gap-2">
                                                                    <span class="text-xs text-content-tertiary">SHIB</span>
                                                                <span class="px-1.5 py-0.5 text-[10px] font-medium rounded bg-surface-overlay text-content-tertiary capitalize">crypto</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-end justify-between">
                        <span class="text-lg font-bold text-content-primary">
                            $0.00
                        </span>
                                                    <span class="inline-flex items-center gap-0.5 px-2 py-0.5 text-xs font-semibold rounded-full bg-loss/10 text-loss">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6 9 12.75l6.75-6.75M2.25 12.75 9 19.5l6.75-6.75" />
</svg>
                                -6.10%
                            </span>
                                            </div>
                </a>
                            <a href="{{ route('user.trade') }}?asset=74"
                   class="bg-surface-raised border border-surface-border rounded-xl p-4 hover:bg-surface-overlay/50 transition-colors block">
                    <div class="flex items-center gap-3 mb-3">
                                                    <img src="https://coin-images.coingecko.com/coins/images/31212/large/PYUSD_Token_Logo_2x.png?1765987788" alt="" class="w-10 h-10 rounded-full bg-surface-overlay" loading="lazy">
                                                <div class="min-w-0 flex-1">
                            <span class="text-sm font-semibold text-content-primary block truncate" title="PayPal USD">PayPal USD</span>
                            <div class="flex items-center gap-2">
                                                                    <span class="text-xs text-content-tertiary">PYUSD</span>
                                                                <span class="px-1.5 py-0.5 text-[10px] font-medium rounded bg-surface-overlay text-content-tertiary capitalize">crypto</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-end justify-between">
                        <span class="text-lg font-bold text-content-primary">
                            $1.00
                        </span>
                                                    <span class="inline-flex items-center gap-0.5 px-2 py-0.5 text-xs font-semibold rounded-full bg-gain/10 text-gain">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
</svg>
                                +0.10%
                            </span>
                                            </div>
                </a>
                            <a href="{{ route('user.trade') }}?asset=79"
                   class="bg-surface-raised border border-surface-border rounded-xl p-4 hover:bg-surface-overlay/50 transition-colors block">
                    <div class="flex items-center gap-3 mb-3">
                                                    <img src="https://coin-images.coingecko.com/coins/images/7310/large/cro_token_logo.png?1696507599" alt="" class="w-10 h-10 rounded-full bg-surface-overlay" loading="lazy">
                                                <div class="min-w-0 flex-1">
                            <span class="text-sm font-semibold text-content-primary block truncate" title="Cronos">Cronos</span>
                            <div class="flex items-center gap-2">
                                                                    <span class="text-xs text-content-tertiary">CRO</span>
                                                                <span class="px-1.5 py-0.5 text-[10px] font-medium rounded bg-surface-overlay text-content-tertiary capitalize">crypto</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-end justify-between">
                        <span class="text-lg font-bold text-content-primary">
                            $0.06
                        </span>
                                                    <span class="inline-flex items-center gap-0.5 px-2 py-0.5 text-xs font-semibold rounded-full bg-loss/10 text-loss">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6 9 12.75l6.75-6.75M2.25 12.75 9 19.5l6.75-6.75" />
</svg>
                                -1.16%
                            </span>
                                            </div>
                </a>
                            <a href="{{ route('user.trade') }}?asset=87"
                   class="bg-surface-raised border border-surface-border rounded-xl p-4 hover:bg-surface-overlay/50 transition-colors block">
                    <div class="flex items-center gap-3 mb-3">
                                                    <img src="https://coin-images.coingecko.com/coins/images/36291/large/blackrock.png?1711013223" alt="" class="w-10 h-10 rounded-full bg-surface-overlay" loading="lazy">
                                                <div class="min-w-0 flex-1">
                            <span class="text-sm font-semibold text-content-primary block truncate" title="BlackRock USD Institutional Digital Liquidity Fund">BlackRock USD Institutional Digital Liquidity Fund</span>
                            <div class="flex items-center gap-2">
                                                                    <span class="text-xs text-content-tertiary">BUIDL</span>
                                                                <span class="px-1.5 py-0.5 text-[10px] font-medium rounded bg-surface-overlay text-content-tertiary capitalize">crypto</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-end justify-between">
                        <span class="text-lg font-bold text-content-primary">
                            $1.00
                        </span>
                                                    <span class="inline-flex items-center gap-0.5 px-2 py-0.5 text-xs font-semibold rounded-full bg-gain/10 text-gain">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
</svg>
                                +0.00%
                            </span>
                                            </div>
                </a>
                            <a href="{{ route('user.trade') }}?asset=122"
                   class="bg-surface-raised border border-surface-border rounded-xl p-4 hover:bg-surface-overlay/50 transition-colors block">
                    <div class="flex items-center gap-3 mb-3">
                                                    <img src="https://coin-images.coingecko.com/coins/images/10365/large/near.jpg?1696510367" alt="" class="w-10 h-10 rounded-full bg-surface-overlay" loading="lazy">
                                                <div class="min-w-0 flex-1">
                            <span class="text-sm font-semibold text-content-primary block truncate" title="NEAR Protocol">NEAR Protocol</span>
                            <div class="flex items-center gap-2">
                                                                    <span class="text-xs text-content-tertiary">NEAR</span>
                                                                <span class="px-1.5 py-0.5 text-[10px] font-medium rounded bg-surface-overlay text-content-tertiary capitalize">crypto</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-end justify-between">
                        <span class="text-lg font-bold text-content-primary">
                            $1.95
                        </span>
                                                    <span class="inline-flex items-center gap-0.5 px-2 py-0.5 text-xs font-semibold rounded-full bg-loss/10 text-loss">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6 9 12.75l6.75-6.75M2.25 12.75 9 19.5l6.75-6.75" />
</svg>
                                -1.61%
                            </span>
                                            </div>
                </a>
                            <a href="{{ route('user.trade') }}?asset=80"
                   class="bg-surface-raised border border-surface-border rounded-xl p-4 hover:bg-surface-overlay/50 transition-colors block">
                    <div class="flex items-center gap-3 mb-3">
                                                    <img src="https://coin-images.coingecko.com/coins/images/10481/large/logo.png?1774627372" alt="" class="w-10 h-10 rounded-full bg-surface-overlay" loading="lazy">
                                                <div class="min-w-0 flex-1">
                            <span class="text-sm font-semibold text-content-primary block truncate" title="Tether Gold">Tether Gold</span>
                            <div class="flex items-center gap-2">
                                                                    <span class="text-xs text-content-tertiary">XAUT</span>
                                                                <span class="px-1.5 py-0.5 text-[10px] font-medium rounded bg-surface-overlay text-content-tertiary capitalize">crypto</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-end justify-between">
                        <span class="text-lg font-bold text-content-primary">
                            $4,119.82
                        </span>
                                                    <span class="inline-flex items-center gap-0.5 px-2 py-0.5 text-xs font-semibold rounded-full bg-loss/10 text-loss">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6 9 12.75l6.75-6.75M2.25 12.75 9 19.5l6.75-6.75" />
</svg>
                                -0.10%
                            </span>
                                            </div>
                </a>
                            <a href="{{ route('user.trade') }}?asset=123"
                   class="bg-surface-raised border border-surface-border rounded-xl p-4 hover:bg-surface-overlay/50 transition-colors block">
                    <div class="flex items-center gap-3 mb-3">
                                                    <img src="https://coin-images.coingecko.com/coins/images/39651/large/RLUSD_200x200_%281%29.png?1727376633" alt="" class="w-10 h-10 rounded-full bg-surface-overlay" loading="lazy">
                                                <div class="min-w-0 flex-1">
                            <span class="text-sm font-semibold text-content-primary block truncate" title="Ripple USD">Ripple USD</span>
                            <div class="flex items-center gap-2">
                                                                    <span class="text-xs text-content-tertiary">RLUSD</span>
                                                                <span class="px-1.5 py-0.5 text-[10px] font-medium rounded bg-surface-overlay text-content-tertiary capitalize">crypto</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-end justify-between">
                        <span class="text-lg font-bold text-content-primary">
                            $1.00
                        </span>
                                                    <span class="inline-flex items-center gap-0.5 px-2 py-0.5 text-xs font-semibold rounded-full bg-gain/10 text-gain">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
</svg>
                                +0.01%
                            </span>
                                            </div>
                </a>
                            <a href="{{ route('user.trade') }}?asset=82"
                   class="bg-surface-raised border border-surface-border rounded-xl p-4 hover:bg-surface-overlay/50 transition-colors block">
                    <div class="flex items-center gap-3 mb-3">
                                                    <img src="https://coin-images.coingecko.com/coins/images/53247/large/square-bg-transparent.png?1752637478" alt="" class="w-10 h-10 rounded-full bg-surface-overlay" loading="lazy">
                                                <div class="min-w-0 flex-1">
                            <span class="text-sm font-semibold text-content-primary block truncate" title="MemeCore">MemeCore</span>
                            <div class="flex items-center gap-2">
                                                                    <span class="text-xs text-content-tertiary">M</span>
                                                                <span class="px-1.5 py-0.5 text-[10px] font-medium rounded bg-surface-overlay text-content-tertiary capitalize">crypto</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-end justify-between">
                        <span class="text-lg font-bold text-content-primary">
                            $1.18
                        </span>
                                                    <span class="inline-flex items-center gap-0.5 px-2 py-0.5 text-xs font-semibold rounded-full bg-loss/10 text-loss">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6 9 12.75l6.75-6.75M2.25 12.75 9 19.5l6.75-6.75" />
</svg>
                                -15.83%
                            </span>
                                            </div>
                </a>
                            <a href="{{ route('user.trade') }}?asset=124"
                   class="bg-surface-raised border border-surface-border rounded-xl p-4 hover:bg-surface-overlay/50 transition-colors block">
                    <div class="flex items-center gap-3 mb-3">
                                                    <img src="https://coin-images.coingecko.com/coins/images/26580/large/ONDO.png?1696525656" alt="" class="w-10 h-10 rounded-full bg-surface-overlay" loading="lazy">
                                                <div class="min-w-0 flex-1">
                            <span class="text-sm font-semibold text-content-primary block truncate" title="Ondo">Ondo</span>
                            <div class="flex items-center gap-2">
                                                                    <span class="text-xs text-content-tertiary">ONDO</span>
                                                                <span class="px-1.5 py-0.5 text-[10px] font-medium rounded bg-surface-overlay text-content-tertiary capitalize">crypto</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-end justify-between">
                        <span class="text-lg font-bold text-content-primary">
                            $0.32
                        </span>
                                                    <span class="inline-flex items-center gap-0.5 px-2 py-0.5 text-xs font-semibold rounded-full bg-gain/10 text-gain">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
</svg>
                                +0.92%
                            </span>
                                            </div>
                </a>
                            <a href="{{ route('user.trade') }}?asset=125"
                   class="bg-surface-raised border border-surface-border rounded-xl p-4 hover:bg-surface-overlay/50 transition-colors block">
                    <div class="flex items-center gap-3 mb-3">
                                                    <img src="https://coin-images.coingecko.com/coins/images/25380/large/UUSD.jpg?1696524513" alt="" class="w-10 h-10 rounded-full bg-surface-overlay" loading="lazy">
                                                <div class="min-w-0 flex-1">
                            <span class="text-sm font-semibold text-content-primary block truncate" title="USDD">USDD</span>
                            <div class="flex items-center gap-2">
                                                                    <span class="text-xs text-content-tertiary">USDD</span>
                                                                <span class="px-1.5 py-0.5 text-[10px] font-medium rounded bg-surface-overlay text-content-tertiary capitalize">crypto</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-end justify-between">
                        <span class="text-lg font-bold text-content-primary">
                            $1.00
                        </span>
                                                    <span class="inline-flex items-center gap-0.5 px-2 py-0.5 text-xs font-semibold rounded-full bg-loss/10 text-loss">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6 9 12.75l6.75-6.75M2.25 12.75 9 19.5l6.75-6.75" />
</svg>
                                -0.02%
                            </span>
                                            </div>
                </a>
                            <a href="{{ route('user.trade') }}?asset=11"
                   class="bg-surface-raised border border-surface-border rounded-xl p-4 hover:bg-surface-overlay/50 transition-colors block">
                    <div class="flex items-center gap-3 mb-3">
                                                    <img src="https://coin-images.coingecko.com/coins/images/12171/large/polkadot.jpg?1766533446" alt="" class="w-10 h-10 rounded-full bg-surface-overlay" loading="lazy">
                                                <div class="min-w-0 flex-1">
                            <span class="text-sm font-semibold text-content-primary block truncate" title="Polkadot">Polkadot</span>
                            <div class="flex items-center gap-2">
                                                                    <span class="text-xs text-content-tertiary">DOT</span>
                                                                <span class="px-1.5 py-0.5 text-[10px] font-medium rounded bg-surface-overlay text-content-tertiary capitalize">crypto</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-end justify-between">
                        <span class="text-lg font-bold text-content-primary">
                            $0.83
                        </span>
                                                    <span class="inline-flex items-center gap-0.5 px-2 py-0.5 text-xs font-semibold rounded-full bg-gain/10 text-gain">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
</svg>
                                +0.88%
                            </span>
                                            </div>
                </a>
                            <a href="{{ route('user.trade') }}?asset=126"
                   class="bg-surface-raised border border-surface-border rounded-xl p-4 hover:bg-surface-overlay/50 transition-colors block">
                    <div class="flex items-center gap-3 mb-3">
                                                    <img src="https://coin-images.coingecko.com/coins/images/29837/large/Morpho-token-icon.png?1726771230" alt="" class="w-10 h-10 rounded-full bg-surface-overlay" loading="lazy">
                                                <div class="min-w-0 flex-1">
                            <span class="text-sm font-semibold text-content-primary block truncate" title="Morpho">Morpho</span>
                            <div class="flex items-center gap-2">
                                                                    <span class="text-xs text-content-tertiary">MORPHO</span>
                                                                <span class="px-1.5 py-0.5 text-[10px] font-medium rounded bg-surface-overlay text-content-tertiary capitalize">crypto</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-end justify-between">
                        <span class="text-lg font-bold text-content-primary">
                            $2.05
                        </span>
                                                    <span class="inline-flex items-center gap-0.5 px-2 py-0.5 text-xs font-semibold rounded-full bg-loss/10 text-loss">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6 9 12.75l6.75-6.75M2.25 12.75 9 19.5l6.75-6.75" />
</svg>
                                -1.93%
                            </span>
                                            </div>
                </a>
                            <a href="{{ route('user.trade') }}?asset=88"
                   class="bg-surface-raised border border-surface-border rounded-xl p-4 hover:bg-surface-overlay/50 transition-colors block">
                    <div class="flex items-center gap-3 mb-3">
                                                    <img src="https://coin-images.coingecko.com/coins/images/39657/large/EUTBL.png?1723517425" alt="" class="w-10 h-10 rounded-full bg-surface-overlay" loading="lazy">
                                                <div class="min-w-0 flex-1">
                            <span class="text-sm font-semibold text-content-primary block truncate" title="Spiko EU T-Bills Money Market Fund">Spiko EU T-Bills Money Market Fund</span>
                            <div class="flex items-center gap-2">
                                                                    <span class="text-xs text-content-tertiary">EUTBL</span>
                                                                <span class="px-1.5 py-0.5 text-[10px] font-medium rounded bg-surface-overlay text-content-tertiary capitalize">crypto</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-end justify-between">
                        <span class="text-lg font-bold text-content-primary">
                            $1.21
                        </span>
                                                    <span class="inline-flex items-center gap-0.5 px-2 py-0.5 text-xs font-semibold rounded-full bg-gain/10 text-gain">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
</svg>
                                +0.34%
                            </span>
                                            </div>
                </a>
                            <a href="{{ route('user.trade') }}?asset=89"
                   class="bg-surface-raised border border-surface-border rounded-xl p-4 hover:bg-surface-overlay/50 transition-colors block">
                    <div class="flex items-center gap-3 mb-3">
                                                    <img src="https://coin-images.coingecko.com/coins/images/56040/large/bcap_logo_200.png?1748088291" alt="" class="w-10 h-10 rounded-full bg-surface-overlay" loading="lazy">
                                                <div class="min-w-0 flex-1">
                            <span class="text-sm font-semibold text-content-primary block truncate" title="Blockchain Capital">Blockchain Capital</span>
                            <div class="flex items-center gap-2">
                                                                    <span class="text-xs text-content-tertiary">BCAP</span>
                                                                <span class="px-1.5 py-0.5 text-[10px] font-medium rounded bg-surface-overlay text-content-tertiary capitalize">crypto</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-end justify-between">
                        <span class="text-lg font-bold text-content-primary">
                            $106.63
                        </span>
                                                    <span class="inline-flex items-center gap-0.5 px-2 py-0.5 text-xs font-semibold rounded-full bg-gain/10 text-gain">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
</svg>
                                +0.00%
                            </span>
                                            </div>
                </a>
                            <a href="{{ route('user.trade') }}?asset=90"
                   class="bg-surface-raised border border-surface-border rounded-xl p-4 hover:bg-surface-overlay/50 transition-colors block">
                    <div class="flex items-center gap-3 mb-3">
                                                    <img src="https://coin-images.coingecko.com/coins/images/70445/large/JTRSY.png?1762078582" alt="" class="w-10 h-10 rounded-full bg-surface-overlay" loading="lazy">
                                                <div class="min-w-0 flex-1">
                            <span class="text-sm font-semibold text-content-primary block truncate" title="Janus Henderson Anemoy Treasury Fund">Janus Henderson Anemoy Treasury Fund</span>
                            <div class="flex items-center gap-2">
                                                                    <span class="text-xs text-content-tertiary">JTRSY</span>
                                                                <span class="px-1.5 py-0.5 text-[10px] font-medium rounded bg-surface-overlay text-content-tertiary capitalize">crypto</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-end justify-between">
                        <span class="text-lg font-bold text-content-primary">
                            $1.11
                        </span>
                                                    <span class="inline-flex items-center gap-0.5 px-2 py-0.5 text-xs font-semibold rounded-full bg-gain/10 text-gain">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
</svg>
                                +0.01%
                            </span>
                                            </div>
                </a>
                            <a href="{{ route('user.trade') }}?asset=91"
                   class="bg-surface-raised border border-surface-border rounded-xl p-4 hover:bg-surface-overlay/50 transition-colors block">
                    <div class="flex items-center gap-3 mb-3">
                                                    <img src="https://coin-images.coingecko.com/coins/images/102172077/large/USDGO_%287%29.png?1771437018" alt="" class="w-10 h-10 rounded-full bg-surface-overlay" loading="lazy">
                                                <div class="min-w-0 flex-1">
                            <span class="text-sm font-semibold text-content-primary block truncate" title="USDGO">USDGO</span>
                            <div class="flex items-center gap-2">
                                                                    <span class="text-xs text-content-tertiary">USDGO</span>
                                                                <span class="px-1.5 py-0.5 text-[10px] font-medium rounded bg-surface-overlay text-content-tertiary capitalize">crypto</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-end justify-between">
                        <span class="text-lg font-bold text-content-primary">
                            $1.00
                        </span>
                                                    <span class="inline-flex items-center gap-0.5 px-2 py-0.5 text-xs font-semibold rounded-full bg-gain/10 text-gain">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
</svg>
                                +0.02%
                            </span>
                                            </div>
                </a>
                            <a href="{{ route('user.trade') }}?asset=92"
                   class="bg-surface-raised border border-surface-border rounded-xl p-4 hover:bg-surface-overlay/50 transition-colors block">
                    <div class="flex items-center gap-3 mb-3">
                                                    <img src="https://coin-images.coingecko.com/coins/images/35012/large/Invesco_icon_lg.png?1780816895" alt="" class="w-10 h-10 rounded-full bg-surface-overlay" loading="lazy">
                                                <div class="min-w-0 flex-1">
                            <span class="text-sm font-semibold text-content-primary block truncate" title="Invesco Short Duration US Government Securities Fund">Invesco Short Duration US Government Securities Fund</span>
                            <div class="flex items-center gap-2">
                                                                    <span class="text-xs text-content-tertiary">USTB</span>
                                                                <span class="px-1.5 py-0.5 text-[10px] font-medium rounded bg-surface-overlay text-content-tertiary capitalize">crypto</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-end justify-between">
                        <span class="text-lg font-bold text-content-primary">
                            $11.14
                        </span>
                                                    <span class="inline-flex items-center gap-0.5 px-2 py-0.5 text-xs font-semibold rounded-full bg-gain/10 text-gain">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
</svg>
                                +0.01%
                            </span>
                                            </div>
                </a>
                            <a href="{{ route('user.trade') }}?asset=93"
                   class="bg-surface-raised border border-surface-border rounded-xl p-4 hover:bg-surface-overlay/50 transition-colors block">
                    <div class="flex items-center gap-3 mb-3">
                                                    <img src="https://coin-images.coingecko.com/coins/images/102172591/large/Fund_eurSAF0.png?1774104814" alt="" class="w-10 h-10 rounded-full bg-surface-overlay" loading="lazy">
                                                <div class="min-w-0 flex-1">
                            <span class="text-sm font-semibold text-content-primary block truncate" title="Spiko Amundi Overnight Swap Fund (EUR)">Spiko Amundi Overnight Swap Fund (EUR)</span>
                            <div class="flex items-center gap-2">
                                                                    <span class="text-xs text-content-tertiary">EURSAFO</span>
                                                                <span class="px-1.5 py-0.5 text-[10px] font-medium rounded bg-surface-overlay text-content-tertiary capitalize">crypto</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-end justify-between">
                        <span class="text-lg font-bold text-content-primary">
                            $1.15
                        </span>
                                                    <span class="inline-flex items-center gap-0.5 px-2 py-0.5 text-xs font-semibold rounded-full bg-gain/10 text-gain">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
</svg>
                                +0.23%
                            </span>
                                            </div>
                </a>
                            <a href="{{ route('user.trade') }}?asset=94"
                   class="bg-surface-raised border border-surface-border rounded-xl p-4 hover:bg-surface-overlay/50 transition-colors block">
                    <div class="flex items-center gap-3 mb-3">
                                                    <img src="https://coin-images.coingecko.com/coins/images/70446/large/jaaa.png?1762078666" alt="" class="w-10 h-10 rounded-full bg-surface-overlay" loading="lazy">
                                                <div class="min-w-0 flex-1">
                            <span class="text-sm font-semibold text-content-primary block truncate" title="Janus Henderson Anemoy AAA CLO Fund">Janus Henderson Anemoy AAA CLO Fund</span>
                            <div class="flex items-center gap-2">
                                                                    <span class="text-xs text-content-tertiary">JAAA</span>
                                                                <span class="px-1.5 py-0.5 text-[10px] font-medium rounded bg-surface-overlay text-content-tertiary capitalize">crypto</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-end justify-between">
                        <span class="text-lg font-bold text-content-primary">
                            $1.04
                        </span>
                                                    <span class="inline-flex items-center gap-0.5 px-2 py-0.5 text-xs font-semibold rounded-full bg-gain/10 text-gain">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
</svg>
                                +0.02%
                            </span>
                                            </div>
                </a>
                            <a href="{{ route('user.trade') }}?asset=95"
                   class="bg-surface-raised border border-surface-border rounded-xl p-4 hover:bg-surface-overlay/50 transition-colors block">
                    <div class="flex items-center gap-3 mb-3">
                                                    <img src="https://coin-images.coingecko.com/coins/images/29023/large/OUSG.png?1696527993" alt="" class="w-10 h-10 rounded-full bg-surface-overlay" loading="lazy">
                                                <div class="min-w-0 flex-1">
                            <span class="text-sm font-semibold text-content-primary block truncate" title="Ondo Short-Term U.S. Government Bond Fund">Ondo Short-Term U.S. Government Bond Fund</span>
                            <div class="flex items-center gap-2">
                                                                    <span class="text-xs text-content-tertiary">OUSG</span>
                                                                <span class="px-1.5 py-0.5 text-[10px] font-medium rounded bg-surface-overlay text-content-tertiary capitalize">crypto</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-end justify-between">
                        <span class="text-lg font-bold text-content-primary">
                            $115.83
                        </span>
                                                    <span class="inline-flex items-center gap-0.5 px-2 py-0.5 text-xs font-semibold rounded-full bg-gain/10 text-gain">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
</svg>
                                +0.01%
                            </span>
                                            </div>
                </a>
                            <a href="{{ route('user.trade') }}?asset=96"
                   class="bg-surface-raised border border-surface-border rounded-xl p-4 hover:bg-surface-overlay/50 transition-colors block">
                    <div class="flex items-center gap-3 mb-3">
                                                    <img src="https://coin-images.coingecko.com/coins/images/102172243/large/apxUSD.png?1772448502" alt="" class="w-10 h-10 rounded-full bg-surface-overlay" loading="lazy">
                                                <div class="min-w-0 flex-1">
                            <span class="text-sm font-semibold text-content-primary block truncate" title="apxUSD">apxUSD</span>
                            <div class="flex items-center gap-2">
                                                                    <span class="text-xs text-content-tertiary">APXUSD</span>
                                                                <span class="px-1.5 py-0.5 text-[10px] font-medium rounded bg-surface-overlay text-content-tertiary capitalize">crypto</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-end justify-between">
                        <span class="text-lg font-bold text-content-primary">
                            $0.86
                        </span>
                                                    <span class="inline-flex items-center gap-0.5 px-2 py-0.5 text-xs font-semibold rounded-full bg-gain/10 text-gain">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
</svg>
                                +2.23%
                            </span>
                                            </div>
                </a>
                            <a href="{{ route('user.trade') }}?asset=97"
                   class="bg-surface-raised border border-surface-border rounded-xl p-4 hover:bg-surface-overlay/50 transition-colors block">
                    <div class="flex items-center gap-3 mb-3">
                                                    <img src="https://coin-images.coingecko.com/coins/images/102172338/large/photo_2024-11-02_22-15-38.jpg?1772958557" alt="" class="w-10 h-10 rounded-full bg-surface-overlay" loading="lazy">
                                                <div class="min-w-0 flex-1">
                            <span class="text-sm font-semibold text-content-primary block truncate" title="Peanut">Peanut</span>
                            <div class="flex items-center gap-2">
                                                                    <span class="text-xs text-content-tertiary">PEANUT</span>
                                                                <span class="px-1.5 py-0.5 text-[10px] font-medium rounded bg-surface-overlay text-content-tertiary capitalize">crypto</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-end justify-between">
                        <span class="text-lg font-bold text-content-primary">
                            $0.00
                        </span>
                                            </div>
                </a>
                            <a href="{{ route('user.trade') }}?asset=98"
                   class="bg-surface-raised border border-surface-border rounded-xl p-4 hover:bg-surface-overlay/50 transition-colors block">
                    <div class="flex items-center gap-3 mb-3">
                                                    <img src="https://coin-images.coingecko.com/coins/images/66150/large/tradable.jpg?1748488921" alt="" class="w-10 h-10 rounded-full bg-surface-overlay" loading="lazy">
                                                <div class="min-w-0 flex-1">
                            <span class="text-sm font-semibold text-content-primary block truncate" title="Tradable NA Rent Financing Platform SSTN">Tradable NA Rent Financing Platform SSTN</span>
                            <div class="flex items-center gap-2">
                                                                    <span class="text-xs text-content-tertiary">PC0000031</span>
                                                                <span class="px-1.5 py-0.5 text-[10px] font-medium rounded bg-surface-overlay text-content-tertiary capitalize">crypto</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-end justify-between">
                        <span class="text-lg font-bold text-content-primary">
                            $1.00
                        </span>
                                                    <span class="inline-flex items-center gap-0.5 px-2 py-0.5 text-xs font-semibold rounded-full bg-gain/10 text-gain">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
</svg>
                                +0.00%
                            </span>
                                            </div>
                </a>
                            <a href="{{ route('user.trade') }}?asset=99"
                   class="bg-surface-raised border border-surface-border rounded-xl p-4 hover:bg-surface-overlay/50 transition-colors block">
                    <div class="flex items-center gap-3 mb-3">
                                                    <img src="https://coin-images.coingecko.com/coins/images/102173233/large/nexus.jpg?1778490588" alt="" class="w-10 h-10 rounded-full bg-surface-overlay" loading="lazy">
                                                <div class="min-w-0 flex-1">
                            <span class="text-sm font-semibold text-content-primary block truncate" title="Nexus">Nexus</span>
                            <div class="flex items-center gap-2">
                                                                    <span class="text-xs text-content-tertiary">NEX</span>
                                                                <span class="px-1.5 py-0.5 text-[10px] font-medium rounded bg-surface-overlay text-content-tertiary capitalize">crypto</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-end justify-between">
                        <span class="text-lg font-bold text-content-primary">
                            $0.00
                        </span>
                                                    <span class="inline-flex items-center gap-0.5 px-2 py-0.5 text-xs font-semibold rounded-full bg-gain/10 text-gain">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
</svg>
                                +27.97%
                            </span>
                                            </div>
                </a>
                            <a href="{{ route('user.trade') }}?asset=100"
                   class="bg-surface-raised border border-surface-border rounded-xl p-4 hover:bg-surface-overlay/50 transition-colors block">
                    <div class="flex items-center gap-3 mb-3">
                                                    <img src="https://coin-images.coingecko.com/coins/images/71792/large/usat_logo_200x200.png?1769440161" alt="" class="w-10 h-10 rounded-full bg-surface-overlay" loading="lazy">
                                                <div class="min-w-0 flex-1">
                            <span class="text-sm font-semibold text-content-primary block truncate" title="USAT">USAT</span>
                            <div class="flex items-center gap-2">
                                                                    <span class="text-xs text-content-tertiary">USAT</span>
                                                                <span class="px-1.5 py-0.5 text-[10px] font-medium rounded bg-surface-overlay text-content-tertiary capitalize">crypto</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-end justify-between">
                        <span class="text-lg font-bold text-content-primary">
                            $1.00
                        </span>
                                                    <span class="inline-flex items-center gap-0.5 px-2 py-0.5 text-xs font-semibold rounded-full bg-gain/10 text-gain">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
</svg>
                                +0.02%
                            </span>
                                            </div>
                </a>
                            <a href="{{ route('user.trade') }}?asset=101"
                   class="bg-surface-raised border border-surface-border rounded-xl p-4 hover:bg-surface-overlay/50 transition-colors block">
                    <div class="flex items-center gap-3 mb-3">
                                                    <img src="https://coin-images.coingecko.com/coins/images/39666/large/USTB.png?1723541269" alt="" class="w-10 h-10 rounded-full bg-surface-overlay" loading="lazy">
                                                <div class="min-w-0 flex-1">
                            <span class="text-sm font-semibold text-content-primary block truncate" title="Spiko US T-Bills Money Market Fund">Spiko US T-Bills Money Market Fund</span>
                            <div class="flex items-center gap-2">
                                                                    <span class="text-xs text-content-tertiary">USTBL</span>
                                                                <span class="px-1.5 py-0.5 text-[10px] font-medium rounded bg-surface-overlay text-content-tertiary capitalize">crypto</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-end justify-between">
                        <span class="text-lg font-bold text-content-primary">
                            $1.09
                        </span>
                                                    <span class="inline-flex items-center gap-0.5 px-2 py-0.5 text-xs font-semibold rounded-full bg-gain/10 text-gain">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
</svg>
                                +0.01%
                            </span>
                                            </div>
                </a>
                            <a href="{{ route('user.trade') }}?asset=102"
                   class="bg-surface-raised border border-surface-border rounded-xl p-4 hover:bg-surface-overlay/50 transition-colors block">
                    <div class="flex items-center gap-3 mb-3">
                                                    <img src="https://coin-images.coingecko.com/coins/images/102172616/large/edgex.png?1774332310" alt="" class="w-10 h-10 rounded-full bg-surface-overlay" loading="lazy">
                                                <div class="min-w-0 flex-1">
                            <span class="text-sm font-semibold text-content-primary block truncate" title="edgeX">edgeX</span>
                            <div class="flex items-center gap-2">
                                                                    <span class="text-xs text-content-tertiary">EDGE</span>
                                                                <span class="px-1.5 py-0.5 text-[10px] font-medium rounded bg-surface-overlay text-content-tertiary capitalize">crypto</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-end justify-between">
                        <span class="text-lg font-bold text-content-primary">
                            $0.49
                        </span>
                                                    <span class="inline-flex items-center gap-0.5 px-2 py-0.5 text-xs font-semibold rounded-full bg-gain/10 text-gain">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
</svg>
                                +1.79%
                            </span>
                                            </div>
                </a>
                            <a href="{{ route('user.trade') }}?asset=103"
                   class="bg-surface-raised border border-surface-border rounded-xl p-4 hover:bg-surface-overlay/50 transition-colors block">
                    <div class="flex items-center gap-3 mb-3">
                                                    <img src="https://coin-images.coingecko.com/coins/images/66798/large/tradable.jpg?1750576460" alt="" class="w-10 h-10 rounded-full bg-surface-overlay" loading="lazy">
                                                <div class="min-w-0 flex-1">
                            <span class="text-sm font-semibold text-content-primary block truncate" title="Tradable APAC Diversified Finance Provider SSTN">Tradable APAC Diversified Finance Provider SSTN</span>
                            <div class="flex items-center gap-2">
                                                                    <span class="text-xs text-content-tertiary">PC0000033</span>
                                                                <span class="px-1.5 py-0.5 text-[10px] font-medium rounded bg-surface-overlay text-content-tertiary capitalize">crypto</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-end justify-between">
                        <span class="text-lg font-bold text-content-primary">
                            $1.00
                        </span>
                                                    <span class="inline-flex items-center gap-0.5 px-2 py-0.5 text-xs font-semibold rounded-full bg-gain/10 text-gain">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
</svg>
                                +0.00%
                            </span>
                                            </div>
                </a>
                            <a href="{{ route('user.trade') }}?asset=104"
                   class="bg-surface-raised border border-surface-border rounded-xl p-4 hover:bg-surface-overlay/50 transition-colors block">
                    <div class="flex items-center gap-3 mb-3">
                                                    <img src="https://coin-images.coingecko.com/coins/images/102173690/large/spUSDC_%281%29.png?1781003574" alt="" class="w-10 h-10 rounded-full bg-surface-overlay" loading="lazy">
                                                <div class="min-w-0 flex-1">
                            <span class="text-sm font-semibold text-content-primary block truncate" title="Spark USDC">Spark USDC</span>
                            <div class="flex items-center gap-2">
                                                                    <span class="text-xs text-content-tertiary">SUSDC</span>
                                                                <span class="px-1.5 py-0.5 text-[10px] font-medium rounded bg-surface-overlay text-content-tertiary capitalize">crypto</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-end justify-between">
                        <span class="text-lg font-bold text-content-primary">
                            $1.10
                        </span>
                                            </div>
                </a>
                            <a href="{{ route('user.trade') }}?asset=105"
                   class="bg-surface-raised border border-surface-border rounded-xl p-4 hover:bg-surface-overlay/50 transition-colors block">
                    <div class="flex items-center gap-3 mb-3">
                                                    <img src="https://coin-images.coingecko.com/coins/images/102172527/large/apyUSD.png?1773763322" alt="" class="w-10 h-10 rounded-full bg-surface-overlay" loading="lazy">
                                                <div class="min-w-0 flex-1">
                            <span class="text-sm font-semibold text-content-primary block truncate" title="apyUSD">apyUSD</span>
                            <div class="flex items-center gap-2">
                                                                    <span class="text-xs text-content-tertiary">APYUSD</span>
                                                                <span class="px-1.5 py-0.5 text-[10px] font-medium rounded bg-surface-overlay text-content-tertiary capitalize">crypto</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-end justify-between">
                        <span class="text-lg font-bold text-content-primary">
                            $1.19
                        </span>
                                                    <span class="inline-flex items-center gap-0.5 px-2 py-0.5 text-xs font-semibold rounded-full bg-gain/10 text-gain">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
</svg>
                                +2.53%
                            </span>
                                            </div>
                </a>
                            <a href="{{ route('user.trade') }}?asset=106"
                   class="bg-surface-raised border border-surface-border rounded-xl p-4 hover:bg-surface-overlay/50 transition-colors block">
                    <div class="flex items-center gap-3 mb-3">
                                                    <img src="https://coin-images.coingecko.com/coins/images/102172590/large/Fund_usdSAFO.png?1774104804" alt="" class="w-10 h-10 rounded-full bg-surface-overlay" loading="lazy">
                                                <div class="min-w-0 flex-1">
                            <span class="text-sm font-semibold text-content-primary block truncate" title="Spiko Amundi Overnight Swap Fund">Spiko Amundi Overnight Swap Fund</span>
                            <div class="flex items-center gap-2">
                                                                    <span class="text-xs text-content-tertiary">SAFO</span>
                                                                <span class="px-1.5 py-0.5 text-[10px] font-medium rounded bg-surface-overlay text-content-tertiary capitalize">crypto</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-end justify-between">
                        <span class="text-lg font-bold text-content-primary">
                            $1.01
                        </span>
                                                    <span class="inline-flex items-center gap-0.5 px-2 py-0.5 text-xs font-semibold rounded-full bg-gain/10 text-gain">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
</svg>
                                +0.01%
                            </span>
                                            </div>
                </a>
                            <a href="{{ route('user.trade') }}?asset=107"
                   class="bg-surface-raised border border-surface-border rounded-xl p-4 hover:bg-surface-overlay/50 transition-colors block">
                    <div class="flex items-center gap-3 mb-3">
                                                    <img src="https://coin-images.coingecko.com/coins/images/102171961/large/image_%285%29.png?1774269858" alt="" class="w-10 h-10 rounded-full bg-surface-overlay" loading="lazy">
                                                <div class="min-w-0 flex-1">
                            <span class="text-sm font-semibold text-content-primary block truncate" title="Backpack">Backpack</span>
                            <div class="flex items-center gap-2">
                                                                    <span class="text-xs text-content-tertiary">BP</span>
                                                                <span class="px-1.5 py-0.5 text-[10px] font-medium rounded bg-surface-overlay text-content-tertiary capitalize">crypto</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-end justify-between">
                        <span class="text-lg font-bold text-content-primary">
                            $0.55
                        </span>
                                                    <span class="inline-flex items-center gap-0.5 px-2 py-0.5 text-xs font-semibold rounded-full bg-loss/10 text-loss">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6 9 12.75l6.75-6.75M2.25 12.75 9 19.5l6.75-6.75" />
</svg>
                                -2.83%
                            </span>
                                            </div>
                </a>
                            <a href="{{ route('user.trade') }}?asset=108"
                   class="bg-surface-raised border border-surface-border rounded-xl p-4 hover:bg-surface-overlay/50 transition-colors block">
                    <div class="flex items-center gap-3 mb-3">
                                                    <img src="https://coin-images.coingecko.com/coins/images/66796/large/tradable.jpg?1750576421" alt="" class="w-10 h-10 rounded-full bg-surface-overlay" loading="lazy">
                                                <div class="min-w-0 flex-1">
                            <span class="text-sm font-semibold text-content-primary block truncate" title="Tradable LatAm Fintech SSTN">Tradable LatAm Fintech SSTN</span>
                            <div class="flex items-center gap-2">
                                                                    <span class="text-xs text-content-tertiary">PC0000097</span>
                                                                <span class="px-1.5 py-0.5 text-[10px] font-medium rounded bg-surface-overlay text-content-tertiary capitalize">crypto</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-end justify-between">
                        <span class="text-lg font-bold text-content-primary">
                            $1.00
                        </span>
                                                    <span class="inline-flex items-center gap-0.5 px-2 py-0.5 text-xs font-semibold rounded-full bg-gain/10 text-gain">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
</svg>
                                +0.00%
                            </span>
                                            </div>
                </a>
                            <a href="{{ route('user.trade') }}?asset=109"
                   class="bg-surface-raised border border-surface-border rounded-xl p-4 hover:bg-surface-overlay/50 transition-colors block">
                    <div class="flex items-center gap-3 mb-3">
                                                    <img src="https://coin-images.coingecko.com/coins/images/102172835/large/earnETH.png?1776152041" alt="" class="w-10 h-10 rounded-full bg-surface-overlay" loading="lazy">
                                                <div class="min-w-0 flex-1">
                            <span class="text-sm font-semibold text-content-primary block truncate" title="Lido Earn ETH">Lido Earn ETH</span>
                            <div class="flex items-center gap-2">
                                                                    <span class="text-xs text-content-tertiary">EARNETH</span>
                                                                <span class="px-1.5 py-0.5 text-[10px] font-medium rounded bg-surface-overlay text-content-tertiary capitalize">crypto</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-end justify-between">
                        <span class="text-lg font-bold text-content-primary">
                            $1,772.40
                        </span>
                                                    <span class="inline-flex items-center gap-0.5 px-2 py-0.5 text-xs font-semibold rounded-full bg-gain/10 text-gain">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
</svg>
                                +1.03%
                            </span>
                                            </div>
                </a>
                            <a href="{{ route('user.trade') }}?asset=110"
                   class="bg-surface-raised border border-surface-border rounded-xl p-4 hover:bg-surface-overlay/50 transition-colors block">
                    <div class="flex items-center gap-3 mb-3">
                                                    <img src="https://coin-images.coingecko.com/coins/images/102174035/large/IMG_9497.jpeg?1782005339" alt="" class="w-10 h-10 rounded-full bg-surface-overlay" loading="lazy">
                                                <div class="min-w-0 flex-1">
                            <span class="text-sm font-semibold text-content-primary block truncate" title="The Black Bull">The Black Bull</span>
                            <div class="flex items-center gap-2">
                                                                    <span class="text-xs text-content-tertiary">ANSEM</span>
                                                                <span class="px-1.5 py-0.5 text-[10px] font-medium rounded bg-surface-overlay text-content-tertiary capitalize">crypto</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-end justify-between">
                        <span class="text-lg font-bold text-content-primary">
                            $0.30
                        </span>
                                                    <span class="inline-flex items-center gap-0.5 px-2 py-0.5 text-xs font-semibold rounded-full bg-gain/10 text-gain">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
</svg>
                                +1.27%
                            </span>
                                            </div>
                </a>
                            <a href="{{ route('user.trade') }}?asset=111"
                   class="bg-surface-raised border border-surface-border rounded-xl p-4 hover:bg-surface-overlay/50 transition-colors block">
                    <div class="flex items-center gap-3 mb-3">
                                                    <img src="https://coin-images.coingecko.com/coins/images/71660/large/genius.png?1768804210" alt="" class="w-10 h-10 rounded-full bg-surface-overlay" loading="lazy">
                                                <div class="min-w-0 flex-1">
                            <span class="text-sm font-semibold text-content-primary block truncate" title="Genius">Genius</span>
                            <div class="flex items-center gap-2">
                                                                    <span class="text-xs text-content-tertiary">GENIUS</span>
                                                                <span class="px-1.5 py-0.5 text-[10px] font-medium rounded bg-surface-overlay text-content-tertiary capitalize">crypto</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-end justify-between">
                        <span class="text-lg font-bold text-content-primary">
                            $0.35
                        </span>
                                                    <span class="inline-flex items-center gap-0.5 px-2 py-0.5 text-xs font-semibold rounded-full bg-loss/10 text-loss">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6 9 12.75l6.75-6.75M2.25 12.75 9 19.5l6.75-6.75" />
</svg>
                                -3.83%
                            </span>
                                            </div>
                </a>
                            <a href="{{ route('user.trade') }}?asset=112"
                   class="bg-surface-raised border border-surface-border rounded-xl p-4 hover:bg-surface-overlay/50 transition-colors block">
                    <div class="flex items-center gap-3 mb-3">
                                                    <img src="https://coin-images.coingecko.com/coins/images/102173580/large/pearl.png?1780324634" alt="" class="w-10 h-10 rounded-full bg-surface-overlay" loading="lazy">
                                                <div class="min-w-0 flex-1">
                            <span class="text-sm font-semibold text-content-primary block truncate" title="Pearl">Pearl</span>
                            <div class="flex items-center gap-2">
                                                                    <span class="text-xs text-content-tertiary">PRL</span>
                                                                <span class="px-1.5 py-0.5 text-[10px] font-medium rounded bg-surface-overlay text-content-tertiary capitalize">crypto</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-end justify-between">
                        <span class="text-lg font-bold text-content-primary">
                            $0.48
                        </span>
                                                    <span class="inline-flex items-center gap-0.5 px-2 py-0.5 text-xs font-semibold rounded-full bg-gain/10 text-gain">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
</svg>
                                +2.16%
                            </span>
                                            </div>
                </a>
                            <a href="{{ route('user.trade') }}?asset=113"
                   class="bg-surface-raised border border-surface-border rounded-xl p-4 hover:bg-surface-overlay/50 transition-colors block">
                    <div class="flex items-center gap-3 mb-3">
                                                    <img src="https://coin-images.coingecko.com/coins/images/54809/large/ACRED.png?1741801356" alt="" class="w-10 h-10 rounded-full bg-surface-overlay" loading="lazy">
                                                <div class="min-w-0 flex-1">
                            <span class="text-sm font-semibold text-content-primary block truncate" title="Apollo Diversified Credit Securitize Fund">Apollo Diversified Credit Securitize Fund</span>
                            <div class="flex items-center gap-2">
                                                                    <span class="text-xs text-content-tertiary">ACRED</span>
                                                                <span class="px-1.5 py-0.5 text-[10px] font-medium rounded bg-surface-overlay text-content-tertiary capitalize">crypto</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-end justify-between">
                        <span class="text-lg font-bold text-content-primary">
                            $1,103.34
                        </span>
                                                    <span class="inline-flex items-center gap-0.5 px-2 py-0.5 text-xs font-semibold rounded-full bg-gain/10 text-gain">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
</svg>
                                +0.03%
                            </span>
                                            </div>
                </a>
                            <a href="{{ route('user.trade') }}?asset=114"
                   class="bg-surface-raised border border-surface-border rounded-xl p-4 hover:bg-surface-overlay/50 transition-colors block">
                    <div class="flex items-center gap-3 mb-3">
                                                    <img src="https://coin-images.coingecko.com/coins/images/66954/large/tradable.jpg?1751254449" alt="" class="w-10 h-10 rounded-full bg-surface-overlay" loading="lazy">
                                                <div class="min-w-0 flex-1">
                            <span class="text-sm font-semibold text-content-primary block truncate" title="Tradable Singapore Fintech SSL">Tradable Singapore Fintech SSL</span>
                            <div class="flex items-center gap-2">
                                                                    <span class="text-xs text-content-tertiary">PC0000023</span>
                                                                <span class="px-1.5 py-0.5 text-[10px] font-medium rounded bg-surface-overlay text-content-tertiary capitalize">crypto</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-end justify-between">
                        <span class="text-lg font-bold text-content-primary">
                            $1.00
                        </span>
                                                    <span class="inline-flex items-center gap-0.5 px-2 py-0.5 text-xs font-semibold rounded-full bg-gain/10 text-gain">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
</svg>
                                +0.00%
                            </span>
                                            </div>
                </a>
                            <a href="{{ route('user.trade') }}?asset=115"
                   class="bg-surface-raised border border-surface-border rounded-xl p-4 hover:bg-surface-overlay/50 transition-colors block">
                    <div class="flex items-center gap-3 mb-3">
                                                    <img src="https://coin-images.coingecko.com/coins/images/66880/large/tradable.jpg?1750921859" alt="" class="w-10 h-10 rounded-full bg-surface-overlay" loading="lazy">
                                                <div class="min-w-0 flex-1">
                            <span class="text-sm font-semibold text-content-primary block truncate" title="Tradable NA Third Party Online Merchant SSTN">Tradable NA Third Party Online Merchant SSTN</span>
                            <div class="flex items-center gap-2">
                                                                    <span class="text-xs text-content-tertiary">PC0000015</span>
                                                                <span class="px-1.5 py-0.5 text-[10px] font-medium rounded bg-surface-overlay text-content-tertiary capitalize">crypto</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-end justify-between">
                        <span class="text-lg font-bold text-content-primary">
                            $1.00
                        </span>
                                                    <span class="inline-flex items-center gap-0.5 px-2 py-0.5 text-xs font-semibold rounded-full bg-gain/10 text-gain">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
</svg>
                                +0.00%
                            </span>
                                            </div>
                </a>
                            <a href="{{ route('user.trade') }}?asset=116"
                   class="bg-surface-raised border border-surface-border rounded-xl p-4 hover:bg-surface-overlay/50 transition-colors block">
                    <div class="flex items-center gap-3 mb-3">
                                                    <img src="https://coin-images.coingecko.com/coins/images/66877/large/tradable.jpg?1750921571" alt="" class="w-10 h-10 rounded-full bg-surface-overlay" loading="lazy">
                                                <div class="min-w-0 flex-1">
                            <span class="text-sm font-semibold text-content-primary block truncate" title="Tradable LatAm Middle-Market Lender SSTL">Tradable LatAm Middle-Market Lender SSTL</span>
                            <div class="flex items-center gap-2">
                                                                    <span class="text-xs text-content-tertiary">PC0000085</span>
                                                                <span class="px-1.5 py-0.5 text-[10px] font-medium rounded bg-surface-overlay text-content-tertiary capitalize">crypto</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-end justify-between">
                        <span class="text-lg font-bold text-content-primary">
                            $1.00
                        </span>
                                                    <span class="inline-flex items-center gap-0.5 px-2 py-0.5 text-xs font-semibold rounded-full bg-gain/10 text-gain">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
</svg>
                                +0.00%
                            </span>
                                            </div>
                </a>
                            <a href="{{ route('user.trade') }}?asset=117"
                   class="bg-surface-raised border border-surface-border rounded-xl p-4 hover:bg-surface-overlay/50 transition-colors block">
                    <div class="flex items-center gap-3 mb-3">
                                                    <img src="https://coin-images.coingecko.com/coins/images/71167/large/stac_logo.png?1766163743" alt="" class="w-10 h-10 rounded-full bg-surface-overlay" loading="lazy">
                                                <div class="min-w-0 flex-1">
                            <span class="text-sm font-semibold text-content-primary block truncate" title="Securitize Tokenized AAA CLO Fund">Securitize Tokenized AAA CLO Fund</span>
                            <div class="flex items-center gap-2">
                                                                    <span class="text-xs text-content-tertiary">STAC</span>
                                                                <span class="px-1.5 py-0.5 text-[10px] font-medium rounded bg-surface-overlay text-content-tertiary capitalize">crypto</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-end justify-between">
                        <span class="text-lg font-bold text-content-primary">
                            $1,022.98
                        </span>
                                                    <span class="inline-flex items-center gap-0.5 px-2 py-0.5 text-xs font-semibold rounded-full bg-gain/10 text-gain">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
</svg>
                                +0.02%
                            </span>
                                            </div>
                </a>
                            <a href="{{ route('user.trade') }}?asset=118"
                   class="bg-surface-raised border border-surface-border rounded-xl p-4 hover:bg-surface-overlay/50 transition-colors block">
                    <div class="flex items-center gap-3 mb-3">
                                                    <img src="https://coin-images.coingecko.com/coins/images/102172645/large/usdat.png?1774503009" alt="" class="w-10 h-10 rounded-full bg-surface-overlay" loading="lazy">
                                                <div class="min-w-0 flex-1">
                            <span class="text-sm font-semibold text-content-primary block truncate" title="Saturn Dollar">Saturn Dollar</span>
                            <div class="flex items-center gap-2">
                                                                    <span class="text-xs text-content-tertiary">USDAT</span>
                                                                <span class="px-1.5 py-0.5 text-[10px] font-medium rounded bg-surface-overlay text-content-tertiary capitalize">crypto</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-end justify-between">
                        <span class="text-lg font-bold text-content-primary">
                            $1.00
                        </span>
                                                    <span class="inline-flex items-center gap-0.5 px-2 py-0.5 text-xs font-semibold rounded-full bg-loss/10 text-loss">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6 9 12.75l6.75-6.75M2.25 12.75 9 19.5l6.75-6.75" />
</svg>
                                -0.01%
                            </span>
                                            </div>
                </a>
                            <a href="{{ route('user.trade') }}?asset=119"
                   class="bg-surface-raised border border-surface-border rounded-xl p-4 hover:bg-surface-overlay/50 transition-colors block">
                    <div class="flex items-center gap-3 mb-3">
                                                    <img src="https://coin-images.coingecko.com/coins/images/66878/large/tradable.jpg?1750921608" alt="" class="w-10 h-10 rounded-full bg-surface-overlay" loading="lazy">
                                                <div class="min-w-0 flex-1">
                            <span class="text-sm font-semibold text-content-primary block truncate" title="Tradable Singapore Fintech SSL">Tradable Singapore Fintech SSL</span>
                            <div class="flex items-center gap-2">
                                                                    <span class="text-xs text-content-tertiary">PC0000077</span>
                                                                <span class="px-1.5 py-0.5 text-[10px] font-medium rounded bg-surface-overlay text-content-tertiary capitalize">crypto</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-end justify-between">
                        <span class="text-lg font-bold text-content-primary">
                            $1.00
                        </span>
                                                    <span class="inline-flex items-center gap-0.5 px-2 py-0.5 text-xs font-semibold rounded-full bg-gain/10 text-gain">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
</svg>
                                +0.00%
                            </span>
                                            </div>
                </a>
                            <a href="{{ route('user.trade') }}?asset=120"
                   class="bg-surface-raised border border-surface-border rounded-xl p-4 hover:bg-surface-overlay/50 transition-colors block">
                    <div class="flex items-center gap-3 mb-3">
                                                    <img src="https://coin-images.coingecko.com/coins/images/102172413/large/UUSD.png?1773390929" alt="" class="w-10 h-10 rounded-full bg-surface-overlay" loading="lazy">
                                                <div class="min-w-0 flex-1">
                            <span class="text-sm font-semibold text-content-primary block truncate" title="Unity USD">Unity USD</span>
                            <div class="flex items-center gap-2">
                                                                    <span class="text-xs text-content-tertiary">UUSD</span>
                                                                <span class="px-1.5 py-0.5 text-[10px] font-medium rounded bg-surface-overlay text-content-tertiary capitalize">crypto</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-end justify-between">
                        <span class="text-lg font-bold text-content-primary">
                            $1.00
                        </span>
                                                    <span class="inline-flex items-center gap-0.5 px-2 py-0.5 text-xs font-semibold rounded-full bg-gain/10 text-gain">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
</svg>
                                +0.00%
                            </span>
                                            </div>
                </a>
                            <a href="{{ route('user.trade') }}?asset=121"
                   class="bg-surface-raised border border-surface-border rounded-xl p-4 hover:bg-surface-overlay/50 transition-colors block">
                    <div class="flex items-center gap-3 mb-3">
                                                    <img src="https://coin-images.coingecko.com/coins/images/102172975/large/manadia-1_%282%29.png?1776925950" alt="" class="w-10 h-10 rounded-full bg-surface-overlay" loading="lazy">
                                                <div class="min-w-0 flex-1">
                            <span class="text-sm font-semibold text-content-primary block truncate" title="Manadia">Manadia</span>
                            <div class="flex items-center gap-2">
                                                                    <span class="text-xs text-content-tertiary">UMXM</span>
                                                                <span class="px-1.5 py-0.5 text-[10px] font-medium rounded bg-surface-overlay text-content-tertiary capitalize">crypto</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-end justify-between">
                        <span class="text-lg font-bold text-content-primary">
                            $2.06
                        </span>
                                                    <span class="inline-flex items-center gap-0.5 px-2 py-0.5 text-xs font-semibold rounded-full bg-loss/10 text-loss">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6 9 12.75l6.75-6.75M2.25 12.75 9 19.5l6.75-6.75" />
</svg>
                                -6.77%
                            </span>
                                            </div>
                </a>
                            <a href="{{ route('user.trade') }}?asset=14"
                   class="bg-surface-raised border border-surface-border rounded-xl p-4 hover:bg-surface-overlay/50 transition-colors block">
                    <div class="flex items-center gap-3 mb-3">
                                                    <img src="https://assets.coingecko.com/coins/images/4713/large/polygon.png" alt="" class="w-10 h-10 rounded-full bg-surface-overlay" loading="lazy">
                                                <div class="min-w-0 flex-1">
                            <span class="text-sm font-semibold text-content-primary block truncate" title="Polygon">Polygon</span>
                            <div class="flex items-center gap-2">
                                                                    <span class="text-xs text-content-tertiary">MATIC</span>
                                                                <span class="px-1.5 py-0.5 text-[10px] font-medium rounded bg-surface-overlay text-content-tertiary capitalize">crypto</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-end justify-between">
                        <span class="text-lg font-bold text-content-primary">
                            —
                        </span>
                                            </div>
                </a>
                            <a href="{{ route('user.trade') }}?asset=19"
                   class="bg-surface-raised border border-surface-border rounded-xl p-4 hover:bg-surface-overlay/50 transition-colors block">
                    <div class="flex items-center gap-3 mb-3">
                                                    <img src="https://hatscripts.github.io/circle-flags/flags/au.svg" alt="" class="w-10 h-10 rounded-full bg-surface-overlay" loading="lazy">
                                                <div class="min-w-0 flex-1">
                            <span class="text-sm font-semibold text-content-primary block truncate" title="Australian Dollar / US Dollar">Australian Dollar / US Dollar</span>
                            <div class="flex items-center gap-2">
                                                                    <span class="text-xs text-content-tertiary">AUD/USD</span>
                                                                <span class="px-1.5 py-0.5 text-[10px] font-medium rounded bg-surface-overlay text-content-tertiary capitalize">forex</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-end justify-between">
                        <span class="text-lg font-bold text-content-primary">
                            $0.70
                        </span>
                                                    <span class="inline-flex items-center gap-0.5 px-2 py-0.5 text-xs font-semibold rounded-full bg-gain/10 text-gain">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
</svg>
                                +0.05%
                            </span>
                                            </div>
                </a>
                            <a href="{{ route('user.trade') }}?asset=25"
                   class="bg-surface-raised border border-surface-border rounded-xl p-4 hover:bg-surface-overlay/50 transition-colors block">
                    <div class="flex items-center gap-3 mb-3">
                                                    <img src="https://hatscripts.github.io/circle-flags/flags/gb.svg" alt="" class="w-10 h-10 rounded-full bg-surface-overlay" loading="lazy">
                                                <div class="min-w-0 flex-1">
                            <span class="text-sm font-semibold text-content-primary block truncate" title="British Pound / Japanese Yen">British Pound / Japanese Yen</span>
                            <div class="flex items-center gap-2">
                                                                    <span class="text-xs text-content-tertiary">GBP/JPY</span>
                                                                <span class="px-1.5 py-0.5 text-[10px] font-medium rounded bg-surface-overlay text-content-tertiary capitalize">forex</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-end justify-between">
                        <span class="text-lg font-bold text-content-primary">
                            $217.73
                        </span>
                                                    <span class="inline-flex items-center gap-0.5 px-2 py-0.5 text-xs font-semibold rounded-full bg-gain/10 text-gain">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
</svg>
                                +0.06%
                            </span>
                                            </div>
                </a>
                            <a href="{{ route('user.trade') }}?asset=17"
                   class="bg-surface-raised border border-surface-border rounded-xl p-4 hover:bg-surface-overlay/50 transition-colors block">
                    <div class="flex items-center gap-3 mb-3">
                                                    <img src="https://hatscripts.github.io/circle-flags/flags/gb.svg" alt="" class="w-10 h-10 rounded-full bg-surface-overlay" loading="lazy">
                                                <div class="min-w-0 flex-1">
                            <span class="text-sm font-semibold text-content-primary block truncate" title="British Pound / US Dollar">British Pound / US Dollar</span>
                            <div class="flex items-center gap-2">
                                                                    <span class="text-xs text-content-tertiary">GBP/USD</span>
                                                                <span class="px-1.5 py-0.5 text-[10px] font-medium rounded bg-surface-overlay text-content-tertiary capitalize">forex</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-end justify-between">
                        <span class="text-lg font-bold text-content-primary">
                            $1.33
                        </span>
                                                    <span class="inline-flex items-center gap-0.5 px-2 py-0.5 text-xs font-semibold rounded-full bg-gain/10 text-gain">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
</svg>
                                +0.05%
                            </span>
                                            </div>
                </a>
                            <a href="{{ route('user.trade') }}?asset=23"
                   class="bg-surface-raised border border-surface-border rounded-xl p-4 hover:bg-surface-overlay/50 transition-colors block">
                    <div class="flex items-center gap-3 mb-3">
                                                    <img src="https://hatscripts.github.io/circle-flags/flags/eu.svg" alt="" class="w-10 h-10 rounded-full bg-surface-overlay" loading="lazy">
                                                <div class="min-w-0 flex-1">
                            <span class="text-sm font-semibold text-content-primary block truncate" title="Euro / British Pound">Euro / British Pound</span>
                            <div class="flex items-center gap-2">
                                                                    <span class="text-xs text-content-tertiary">EUR/GBP</span>
                                                                <span class="px-1.5 py-0.5 text-[10px] font-medium rounded bg-surface-overlay text-content-tertiary capitalize">forex</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-end justify-between">
                        <span class="text-lg font-bold text-content-primary">
                            $0.86
                        </span>
                                                    <span class="inline-flex items-center gap-0.5 px-2 py-0.5 text-xs font-semibold rounded-full bg-gain/10 text-gain">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
</svg>
                                +0.02%
                            </span>
                                            </div>
                </a>
                            <a href="{{ route('user.trade') }}?asset=24"
                   class="bg-surface-raised border border-surface-border rounded-xl p-4 hover:bg-surface-overlay/50 transition-colors block">
                    <div class="flex items-center gap-3 mb-3">
                                                    <img src="https://hatscripts.github.io/circle-flags/flags/eu.svg" alt="" class="w-10 h-10 rounded-full bg-surface-overlay" loading="lazy">
                                                <div class="min-w-0 flex-1">
                            <span class="text-sm font-semibold text-content-primary block truncate" title="Euro / Japanese Yen">Euro / Japanese Yen</span>
                            <div class="flex items-center gap-2">
                                                                    <span class="text-xs text-content-tertiary">EUR/JPY</span>
                                                                <span class="px-1.5 py-0.5 text-[10px] font-medium rounded bg-surface-overlay text-content-tertiary capitalize">forex</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-end justify-between">
                        <span class="text-lg font-bold text-content-primary">
                            $186.27
                        </span>
                                                    <span class="inline-flex items-center gap-0.5 px-2 py-0.5 text-xs font-semibold rounded-full bg-gain/10 text-gain">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
</svg>
                                +0.06%
                            </span>
                                            </div>
                </a>
                            <a href="{{ route('user.trade') }}?asset=16"
                   class="bg-surface-raised border border-surface-border rounded-xl p-4 hover:bg-surface-overlay/50 transition-colors block">
                    <div class="flex items-center gap-3 mb-3">
                                                    <img src="https://hatscripts.github.io/circle-flags/flags/eu.svg" alt="" class="w-10 h-10 rounded-full bg-surface-overlay" loading="lazy">
                                                <div class="min-w-0 flex-1">
                            <span class="text-sm font-semibold text-content-primary block truncate" title="Euro / US Dollar">Euro / US Dollar</span>
                            <div class="flex items-center gap-2">
                                                                    <span class="text-xs text-content-tertiary">EUR/USD</span>
                                                                <span class="px-1.5 py-0.5 text-[10px] font-medium rounded bg-surface-overlay text-content-tertiary capitalize">forex</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-end justify-between">
                        <span class="text-lg font-bold text-content-primary">
                            $1.14
                        </span>
                                                    <span class="inline-flex items-center gap-0.5 px-2 py-0.5 text-xs font-semibold rounded-full bg-gain/10 text-gain">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
</svg>
                                +0.06%
                            </span>
                                            </div>
                </a>
                            <a href="{{ route('user.trade') }}?asset=26"
                   class="bg-surface-raised border border-surface-border rounded-xl p-4 hover:bg-surface-overlay/50 transition-colors block">
                    <div class="flex items-center gap-3 mb-3">
                                                    <img src="https://img.icons8.com/color/48/gold-bars.png" alt="" class="w-10 h-10 rounded-full bg-surface-overlay" loading="lazy">
                                                <div class="min-w-0 flex-1">
                            <span class="text-sm font-semibold text-content-primary block truncate" title="Gold Spot / US Dollar">Gold Spot / US Dollar</span>
                            <div class="flex items-center gap-2">
                                                                    <span class="text-xs text-content-tertiary">XAU/USD</span>
                                                                <span class="px-1.5 py-0.5 text-[10px] font-medium rounded bg-surface-overlay text-content-tertiary capitalize">forex</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-end justify-between">
                        <span class="text-lg font-bold text-content-primary">
                            $4,046.09
                        </span>
                                                    <span class="inline-flex items-center gap-0.5 px-2 py-0.5 text-xs font-semibold rounded-full bg-loss/10 text-loss">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6 9 12.75l6.75-6.75M2.25 12.75 9 19.5l6.75-6.75" />
</svg>
                                -0.76%
                            </span>
                                            </div>
                </a>
                            <a href="{{ route('user.trade') }}?asset=21"
                   class="bg-surface-raised border border-surface-border rounded-xl p-4 hover:bg-surface-overlay/50 transition-colors block">
                    <div class="flex items-center gap-3 mb-3">
                                                    <img src="https://hatscripts.github.io/circle-flags/flags/nz.svg" alt="" class="w-10 h-10 rounded-full bg-surface-overlay" loading="lazy">
                                                <div class="min-w-0 flex-1">
                            <span class="text-sm font-semibold text-content-primary block truncate" title="New Zealand Dollar / US Dollar">New Zealand Dollar / US Dollar</span>
                            <div class="flex items-center gap-2">
                                                                    <span class="text-xs text-content-tertiary">NZD/USD</span>
                                                                <span class="px-1.5 py-0.5 text-[10px] font-medium rounded bg-surface-overlay text-content-tertiary capitalize">forex</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-end justify-between">
                        <span class="text-lg font-bold text-content-primary">
                            $0.58
                        </span>
                                                    <span class="inline-flex items-center gap-0.5 px-2 py-0.5 text-xs font-semibold rounded-full bg-loss/10 text-loss">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6 9 12.75l6.75-6.75M2.25 12.75 9 19.5l6.75-6.75" />
</svg>
                                -0.05%
                            </span>
                                            </div>
                </a>
                            <a href="{{ route('user.trade') }}?asset=27"
                   class="bg-surface-raised border border-surface-border rounded-xl p-4 hover:bg-surface-overlay/50 transition-colors block">
                    <div class="flex items-center gap-3 mb-3">
                                                    <img src="https://img.icons8.com/color/48/silver-bars.png" alt="" class="w-10 h-10 rounded-full bg-surface-overlay" loading="lazy">
                                                <div class="min-w-0 flex-1">
                            <span class="text-sm font-semibold text-content-primary block truncate" title="Silver / US Dollar">Silver / US Dollar</span>
                            <div class="flex items-center gap-2">
                                                                    <span class="text-xs text-content-tertiary">XAG/USD</span>
                                                                <span class="px-1.5 py-0.5 text-[10px] font-medium rounded bg-surface-overlay text-content-tertiary capitalize">forex</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-end justify-between">
                        <span class="text-lg font-bold text-content-primary">
                            $24.82
                        </span>
                                                    <span class="inline-flex items-center gap-0.5 px-2 py-0.5 text-xs font-semibold rounded-full bg-gain/10 text-gain">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
</svg>
                                +0.68%
                            </span>
                                            </div>
                </a>
                            <a href="{{ route('user.trade') }}?asset=22"
                   class="bg-surface-raised border border-surface-border rounded-xl p-4 hover:bg-surface-overlay/50 transition-colors block">
                    <div class="flex items-center gap-3 mb-3">
                                                    <img src="https://hatscripts.github.io/circle-flags/flags/ca.svg" alt="" class="w-10 h-10 rounded-full bg-surface-overlay" loading="lazy">
                                                <div class="min-w-0 flex-1">
                            <span class="text-sm font-semibold text-content-primary block truncate" title="US Dollar / Canadian Dollar">US Dollar / Canadian Dollar</span>
                            <div class="flex items-center gap-2">
                                                                    <span class="text-xs text-content-tertiary">USD/CAD</span>
                                                                <span class="px-1.5 py-0.5 text-[10px] font-medium rounded bg-surface-overlay text-content-tertiary capitalize">forex</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-end justify-between">
                        <span class="text-lg font-bold text-content-primary">
                            $1.41
                        </span>
                                                    <span class="inline-flex items-center gap-0.5 px-2 py-0.5 text-xs font-semibold rounded-full bg-loss/10 text-loss">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6 9 12.75l6.75-6.75M2.25 12.75 9 19.5l6.75-6.75" />
</svg>
                                -0.04%
                            </span>
                                            </div>
                </a>
                            <a href="{{ route('user.trade') }}?asset=18"
                   class="bg-surface-raised border border-surface-border rounded-xl p-4 hover:bg-surface-overlay/50 transition-colors block">
                    <div class="flex items-center gap-3 mb-3">
                                                    <img src="https://hatscripts.github.io/circle-flags/flags/us.svg" alt="" class="w-10 h-10 rounded-full bg-surface-overlay" loading="lazy">
                                                <div class="min-w-0 flex-1">
                            <span class="text-sm font-semibold text-content-primary block truncate" title="US Dollar / Japanese Yen">US Dollar / Japanese Yen</span>
                            <div class="flex items-center gap-2">
                                                                    <span class="text-xs text-content-tertiary">USD/JPY</span>
                                                                <span class="px-1.5 py-0.5 text-[10px] font-medium rounded bg-surface-overlay text-content-tertiary capitalize">forex</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-end justify-between">
                        <span class="text-lg font-bold text-content-primary">
                            $163.77
                        </span>
                                                    <span class="inline-flex items-center gap-0.5 px-2 py-0.5 text-xs font-semibold rounded-full bg-gain/10 text-gain">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
</svg>
                                +0.02%
                            </span>
                                            </div>
                </a>
                            <a href="{{ route('user.trade') }}?asset=20"
                   class="bg-surface-raised border border-surface-border rounded-xl p-4 hover:bg-surface-overlay/50 transition-colors block">
                    <div class="flex items-center gap-3 mb-3">
                                                    <img src="https://hatscripts.github.io/circle-flags/flags/ch.svg" alt="" class="w-10 h-10 rounded-full bg-surface-overlay" loading="lazy">
                                                <div class="min-w-0 flex-1">
                            <span class="text-sm font-semibold text-content-primary block truncate" title="US Dollar / Swiss Franc">US Dollar / Swiss Franc</span>
                            <div class="flex items-center gap-2">
                                                                    <span class="text-xs text-content-tertiary">USD/CHF</span>
                                                                <span class="px-1.5 py-0.5 text-[10px] font-medium rounded bg-surface-overlay text-content-tertiary capitalize">forex</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-end justify-between">
                        <span class="text-lg font-bold text-content-primary">
                            $0.82
                        </span>
                                                    <span class="inline-flex items-center gap-0.5 px-2 py-0.5 text-xs font-semibold rounded-full bg-loss/10 text-loss">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6 9 12.75l6.75-6.75M2.25 12.75 9 19.5l6.75-6.75" />
</svg>
                                -0.07%
                            </span>
                                            </div>
                </a>
                            <a href="{{ route('user.trade') }}?asset=86"
                   class="bg-surface-raised border border-surface-border rounded-xl p-4 hover:bg-surface-overlay/50 transition-colors block">
                    <div class="flex items-center gap-3 mb-3">
                                                    <div class="w-10 h-10 rounded-full bg-surface-overlay flex items-center justify-center text-sm font-bold text-content-secondary">
                                AM
                            </div>
                                                <div class="min-w-0 flex-1">
                            <span class="text-sm font-semibold text-content-primary block truncate" title="Advanced Micro Devices, Inc.">Advanced Micro Devices, Inc.</span>
                            <div class="flex items-center gap-2">
                                                                    <span class="text-xs text-content-tertiary">AMD</span>
                                                                <span class="px-1.5 py-0.5 text-[10px] font-medium rounded bg-surface-overlay text-content-tertiary capitalize">stock</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-end justify-between">
                        <span class="text-lg font-bold text-content-primary">
                            $494.95
                        </span>
                                                    <span class="inline-flex items-center gap-0.5 px-2 py-0.5 text-xs font-semibold rounded-full bg-loss/10 text-loss">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6 9 12.75l6.75-6.75M2.25 12.75 9 19.5l6.75-6.75" />
</svg>
                                -5.17%
                            </span>
                                            </div>
                </a>
                            <a href="{{ route('user.trade') }}?asset=30"
                   class="bg-surface-raised border border-surface-border rounded-xl p-4 hover:bg-surface-overlay/50 transition-colors block">
                    <div class="flex items-center gap-3 mb-3">
                                                    <img src="https://static2.finnhub.io/file/publicdatany/finnhubimage/stock_logo/GOOG.png" alt="" class="w-10 h-10 rounded-full bg-surface-overlay" loading="lazy">
                                                <div class="min-w-0 flex-1">
                            <span class="text-sm font-semibold text-content-primary block truncate" title="Alphabet Inc.">Alphabet Inc.</span>
                            <div class="flex items-center gap-2">
                                                                    <span class="text-xs text-content-tertiary">GOOGL</span>
                                                                <span class="px-1.5 py-0.5 text-[10px] font-medium rounded bg-surface-overlay text-content-tertiary capitalize">stock</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-end justify-between">
                        <span class="text-lg font-bold text-content-primary">
                            $326.56
                        </span>
                                                    <span class="inline-flex items-center gap-0.5 px-2 py-0.5 text-xs font-semibold rounded-full bg-gain/10 text-gain">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
</svg>
                                +2.13%
                            </span>
                                            </div>
                </a>
                            <a href="{{ route('user.trade') }}?asset=31"
                   class="bg-surface-raised border border-surface-border rounded-xl p-4 hover:bg-surface-overlay/50 transition-colors block">
                    <div class="flex items-center gap-3 mb-3">
                                                    <img src="https://static2.finnhub.io/file/publicdatany/finnhubimage/stock_logo/AMZN.png" alt="" class="w-10 h-10 rounded-full bg-surface-overlay" loading="lazy">
                                                <div class="min-w-0 flex-1">
                            <span class="text-sm font-semibold text-content-primary block truncate" title="Amazon.com, Inc.">Amazon.com, Inc.</span>
                            <div class="flex items-center gap-2">
                                                                    <span class="text-xs text-content-tertiary">AMZN</span>
                                                                <span class="px-1.5 py-0.5 text-[10px] font-medium rounded bg-surface-overlay text-content-tertiary capitalize">stock</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-end justify-between">
                        <span class="text-lg font-bold text-content-primary">
                            $231.39
                        </span>
                                                    <span class="inline-flex items-center gap-0.5 px-2 py-0.5 text-xs font-semibold rounded-full bg-loss/10 text-loss">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6 9 12.75l6.75-6.75M2.25 12.75 9 19.5l6.75-6.75" />
</svg>
                                -0.31%
                            </span>
                                            </div>
                </a>
                            <a href="{{ route('user.trade') }}?asset=28"
                   class="bg-surface-raised border border-surface-border rounded-xl p-4 hover:bg-surface-overlay/50 transition-colors block">
                    <div class="flex items-center gap-3 mb-3">
                                                    <img src="https://static2.finnhub.io/file/publicdatany/finnhubimage/stock_logo/AAPL.png" alt="" class="w-10 h-10 rounded-full bg-surface-overlay" loading="lazy">
                                                <div class="min-w-0 flex-1">
                            <span class="text-sm font-semibold text-content-primary block truncate" title="Apple Inc.">Apple Inc.</span>
                            <div class="flex items-center gap-2">
                                                                    <span class="text-xs text-content-tertiary">AAPL</span>
                                                                <span class="px-1.5 py-0.5 text-[10px] font-medium rounded bg-surface-overlay text-content-tertiary capitalize">stock</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-end justify-between">
                        <span class="text-lg font-bold text-content-primary">
                            $336.91
                        </span>
                                                    <span class="inline-flex items-center gap-0.5 px-2 py-0.5 text-xs font-semibold rounded-full bg-gain/10 text-gain">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
</svg>
                                +1.17%
                            </span>
                                            </div>
                </a>
                            <a href="{{ route('user.trade') }}?asset=40"
                   class="bg-surface-raised border border-surface-border rounded-xl p-4 hover:bg-surface-overlay/50 transition-colors block">
                    <div class="flex items-center gap-3 mb-3">
                                                    <img src="https://logo.clearbit.com/boeing.com" alt="" class="w-10 h-10 rounded-full bg-surface-overlay" loading="lazy">
                                                <div class="min-w-0 flex-1">
                            <span class="text-sm font-semibold text-content-primary block truncate" title="Boeing Company">Boeing Company</span>
                            <div class="flex items-center gap-2">
                                                                    <span class="text-xs text-content-tertiary">BA</span>
                                                                <span class="px-1.5 py-0.5 text-[10px] font-medium rounded bg-surface-overlay text-content-tertiary capitalize">stock</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-end justify-between">
                        <span class="text-lg font-bold text-content-primary">
                            $211.50
                        </span>
                                                    <span class="inline-flex items-center gap-0.5 px-2 py-0.5 text-xs font-semibold rounded-full bg-gain/10 text-gain">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
</svg>
                                +0.95%
                            </span>
                                            </div>
                </a>
                            <a href="{{ route('user.trade') }}?asset=37"
                   class="bg-surface-raised border border-surface-border rounded-xl p-4 hover:bg-surface-overlay/50 transition-colors block">
                    <div class="flex items-center gap-3 mb-3">
                                                    <img src="https://static2.finnhub.io/file/publicdatany/finnhubimage/stock_logo/INTC.png" alt="" class="w-10 h-10 rounded-full bg-surface-overlay" loading="lazy">
                                                <div class="min-w-0 flex-1">
                            <span class="text-sm font-semibold text-content-primary block truncate" title="Intel Corporation">Intel Corporation</span>
                            <div class="flex items-center gap-2">
                                                                    <span class="text-xs text-content-tertiary">INTC</span>
                                                                <span class="px-1.5 py-0.5 text-[10px] font-medium rounded bg-surface-overlay text-content-tertiary capitalize">stock</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-end justify-between">
                        <span class="text-lg font-bold text-content-primary">
                            $91.67
                        </span>
                                                    <span class="inline-flex items-center gap-0.5 px-2 py-0.5 text-xs font-semibold rounded-full bg-loss/10 text-loss">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6 9 12.75l6.75-6.75M2.25 12.75 9 19.5l6.75-6.75" />
</svg>
                                -0.70%
                            </span>
                                            </div>
                </a>
                            <a href="{{ route('user.trade') }}?asset=41"
                   class="bg-surface-raised border border-surface-border rounded-xl p-4 hover:bg-surface-overlay/50 transition-colors block">
                    <div class="flex items-center gap-3 mb-3">
                                                    <img src="https://logo.clearbit.com/jpmorganchase.com" alt="" class="w-10 h-10 rounded-full bg-surface-overlay" loading="lazy">
                                                <div class="min-w-0 flex-1">
                            <span class="text-sm font-semibold text-content-primary block truncate" title="JPMorgan Chase &amp; Co.">JPMorgan Chase &amp; Co.</span>
                            <div class="flex items-center gap-2">
                                                                    <span class="text-xs text-content-tertiary">JPM</span>
                                                                <span class="px-1.5 py-0.5 text-[10px] font-medium rounded bg-surface-overlay text-content-tertiary capitalize">stock</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-end justify-between">
                        <span class="text-lg font-bold text-content-primary">
                            $356.20
                        </span>
                                                    <span class="inline-flex items-center gap-0.5 px-2 py-0.5 text-xs font-semibold rounded-full bg-gain/10 text-gain">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
</svg>
                                +0.85%
                            </span>
                                            </div>
                </a>
                            <a href="{{ route('user.trade') }}?asset=34"
                   class="bg-surface-raised border border-surface-border rounded-xl p-4 hover:bg-surface-overlay/50 transition-colors block">
                    <div class="flex items-center gap-3 mb-3">
                                                    <img src="https://static2.finnhub.io/file/publicdatany/finnhubimage/stock_logo/FB.png" alt="" class="w-10 h-10 rounded-full bg-surface-overlay" loading="lazy">
                                                <div class="min-w-0 flex-1">
                            <span class="text-sm font-semibold text-content-primary block truncate" title="Meta Platforms Inc Class A">Meta Platforms Inc Class A</span>
                            <div class="flex items-center gap-2">
                                                                    <span class="text-xs text-content-tertiary">META</span>
                                                                <span class="px-1.5 py-0.5 text-[10px] font-medium rounded bg-surface-overlay text-content-tertiary capitalize">stock</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-end justify-between">
                        <span class="text-lg font-bold text-content-primary">
                            $593.87
                        </span>
                                                    <span class="inline-flex items-center gap-0.5 px-2 py-0.5 text-xs font-semibold rounded-full bg-loss/10 text-loss">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6 9 12.75l6.75-6.75M2.25 12.75 9 19.5l6.75-6.75" />
</svg>
                                -0.22%
                            </span>
                                            </div>
                </a>
                            <a href="{{ route('user.trade') }}?asset=29"
                   class="bg-surface-raised border border-surface-border rounded-xl p-4 hover:bg-surface-overlay/50 transition-colors block">
                    <div class="flex items-center gap-3 mb-3">
                                                    <img src="https://static2.finnhub.io/file/publicdatany/finnhubimage/stock_logo/MSFT.png" alt="" class="w-10 h-10 rounded-full bg-surface-overlay" loading="lazy">
                                                <div class="min-w-0 flex-1">
                            <span class="text-sm font-semibold text-content-primary block truncate" title="Microsoft Corp.">Microsoft Corp.</span>
                            <div class="flex items-center gap-2">
                                                                    <span class="text-xs text-content-tertiary">MSFT</span>
                                                                <span class="px-1.5 py-0.5 text-[10px] font-medium rounded bg-surface-overlay text-content-tertiary capitalize">stock</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-end justify-between">
                        <span class="text-lg font-bold text-content-primary">
                            $389.10
                        </span>
                                                    <span class="inline-flex items-center gap-0.5 px-2 py-0.5 text-xs font-semibold rounded-full bg-gain/10 text-gain">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
</svg>
                                +1.94%
                            </span>
                                            </div>
                </a>
                            <a href="{{ route('user.trade') }}?asset=35"
                   class="bg-surface-raised border border-surface-border rounded-xl p-4 hover:bg-surface-overlay/50 transition-colors block">
                    <div class="flex items-center gap-3 mb-3">
                                                    <img src="https://static2.finnhub.io/file/publicdatany/finnhubimage/stock_logo/NFLX.png" alt="" class="w-10 h-10 rounded-full bg-surface-overlay" loading="lazy">
                                                <div class="min-w-0 flex-1">
                            <span class="text-sm font-semibold text-content-primary block truncate" title="Netflix, Inc.">Netflix, Inc.</span>
                            <div class="flex items-center gap-2">
                                                                    <span class="text-xs text-content-tertiary">NFLX</span>
                                                                <span class="px-1.5 py-0.5 text-[10px] font-medium rounded bg-surface-overlay text-content-tertiary capitalize">stock</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-end justify-between">
                        <span class="text-lg font-bold text-content-primary">
                            $70.40
                        </span>
                                                    <span class="inline-flex items-center gap-0.5 px-2 py-0.5 text-xs font-semibold rounded-full bg-gain/10 text-gain">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
</svg>
                                +0.44%
                            </span>
                                            </div>
                </a>
                            <a href="{{ route('user.trade') }}?asset=33"
                   class="bg-surface-raised border border-surface-border rounded-xl p-4 hover:bg-surface-overlay/50 transition-colors block">
                    <div class="flex items-center gap-3 mb-3">
                                                    <img src="https://static2.finnhub.io/file/publicdatany/finnhubimage/stock_logo/NVDA.png" alt="" class="w-10 h-10 rounded-full bg-surface-overlay" loading="lazy">
                                                <div class="min-w-0 flex-1">
                            <span class="text-sm font-semibold text-content-primary block truncate" title="NVIDIA Corporation">NVIDIA Corporation</span>
                            <div class="flex items-center gap-2">
                                                                    <span class="text-xs text-content-tertiary">NVDA</span>
                                                                <span class="px-1.5 py-0.5 text-[10px] font-medium rounded bg-surface-overlay text-content-tertiary capitalize">stock</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-end justify-between">
                        <span class="text-lg font-bold text-content-primary">
                            $196.51
                        </span>
                                                    <span class="inline-flex items-center gap-0.5 px-2 py-0.5 text-xs font-semibold rounded-full bg-loss/10 text-loss">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6 9 12.75l6.75-6.75M2.25 12.75 9 19.5l6.75-6.75" />
</svg>
                                -4.99%
                            </span>
                                            </div>
                </a>
                            <a href="{{ route('user.trade') }}?asset=38"
                   class="bg-surface-raised border border-surface-border rounded-xl p-4 hover:bg-surface-overlay/50 transition-colors block">
                    <div class="flex items-center gap-3 mb-3">
                                                    <img src="https://logo.clearbit.com/paypal.com" alt="" class="w-10 h-10 rounded-full bg-surface-overlay" loading="lazy">
                                                <div class="min-w-0 flex-1">
                            <span class="text-sm font-semibold text-content-primary block truncate" title="PayPal Holdings Inc">PayPal Holdings Inc</span>
                            <div class="flex items-center gap-2">
                                                                    <span class="text-xs text-content-tertiary">PYPL</span>
                                                                <span class="px-1.5 py-0.5 text-[10px] font-medium rounded bg-surface-overlay text-content-tertiary capitalize">stock</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-end justify-between">
                        <span class="text-lg font-bold text-content-primary">
                            $56.07
                        </span>
                                                    <span class="inline-flex items-center gap-0.5 px-2 py-0.5 text-xs font-semibold rounded-full bg-loss/10 text-loss">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6 9 12.75l6.75-6.75M2.25 12.75 9 19.5l6.75-6.75" />
</svg>
                                -0.14%
                            </span>
                                            </div>
                </a>
                            <a href="{{ route('user.trade') }}?asset=32"
                   class="bg-surface-raised border border-surface-border rounded-xl p-4 hover:bg-surface-overlay/50 transition-colors block">
                    <div class="flex items-center gap-3 mb-3">
                                                    <img src="https://static2.finnhub.io/file/publicdatany/finnhubimage/stock_logo/TSLA.png" alt="" class="w-10 h-10 rounded-full bg-surface-overlay" loading="lazy">
                                                <div class="min-w-0 flex-1">
                            <span class="text-sm font-semibold text-content-primary block truncate" title="Tesla, Inc.">Tesla, Inc.</span>
                            <div class="flex items-center gap-2">
                                                                    <span class="text-xs text-content-tertiary">TSLA</span>
                                                                <span class="px-1.5 py-0.5 text-[10px] font-medium rounded bg-surface-overlay text-content-tertiary capitalize">stock</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-end justify-between">
                        <span class="text-lg font-bold text-content-primary">
                            $309.22
                        </span>
                                                    <span class="inline-flex items-center gap-0.5 px-2 py-0.5 text-xs font-semibold rounded-full bg-loss/10 text-loss">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6 9 12.75l6.75-6.75M2.25 12.75 9 19.5l6.75-6.75" />
</svg>
                                -1.22%
                            </span>
                                            </div>
                </a>
                            <a href="{{ route('user.trade') }}?asset=39"
                   class="bg-surface-raised border border-surface-border rounded-xl p-4 hover:bg-surface-overlay/50 transition-colors block">
                    <div class="flex items-center gap-3 mb-3">
                                                    <img src="https://logo.clearbit.com/disney.com" alt="" class="w-10 h-10 rounded-full bg-surface-overlay" loading="lazy">
                                                <div class="min-w-0 flex-1">
                            <span class="text-sm font-semibold text-content-primary block truncate" title="The Walt Disney Company">The Walt Disney Company</span>
                            <div class="flex items-center gap-2">
                                                                    <span class="text-xs text-content-tertiary">DIS</span>
                                                                <span class="px-1.5 py-0.5 text-[10px] font-medium rounded bg-surface-overlay text-content-tertiary capitalize">stock</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-end justify-between">
                        <span class="text-lg font-bold text-content-primary">
                            $96.65
                        </span>
                                                    <span class="inline-flex items-center gap-0.5 px-2 py-0.5 text-xs font-semibold rounded-full bg-gain/10 text-gain">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
</svg>
                                +1.90%
                            </span>
                                            </div>
                </a>
                            <a href="{{ route('user.trade') }}?asset=50"
                   class="bg-surface-raised border border-surface-border rounded-xl p-4 hover:bg-surface-overlay/50 transition-colors block">
                    <div class="flex items-center gap-3 mb-3">
                                                    <img src="https://logo.clearbit.com/ark-invest.com" alt="" class="w-10 h-10 rounded-full bg-surface-overlay" loading="lazy">
                                                <div class="min-w-0 flex-1">
                            <span class="text-sm font-semibold text-content-primary block truncate" title="ARK Innovation ETF Fund">ARK Innovation ETF Fund</span>
                            <div class="flex items-center gap-2">
                                                                    <span class="text-xs text-content-tertiary">ARKK</span>
                                                                <span class="px-1.5 py-0.5 text-[10px] font-medium rounded bg-surface-overlay text-content-tertiary capitalize">etf</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-end justify-between">
                        <span class="text-lg font-bold text-content-primary">
                            $72.53
                        </span>
                                                    <span class="inline-flex items-center gap-0.5 px-2 py-0.5 text-xs font-semibold rounded-full bg-gain/10 text-gain">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
</svg>
                                +0.89%
                            </span>
                                            </div>
                </a>
                            <a href="{{ route('user.trade') }}?asset=49"
                   class="bg-surface-raised border border-surface-border rounded-xl p-4 hover:bg-surface-overlay/50 transition-colors block">
                    <div class="flex items-center gap-3 mb-3">
                                                    <img src="https://logo.clearbit.com/ssga.com" alt="" class="w-10 h-10 rounded-full bg-surface-overlay" loading="lazy">
                                                <div class="min-w-0 flex-1">
                            <span class="text-sm font-semibold text-content-primary block truncate" title="Financial Select Sector SPDR Fund">Financial Select Sector SPDR Fund</span>
                            <div class="flex items-center gap-2">
                                                                    <span class="text-xs text-content-tertiary">XLF</span>
                                                                <span class="px-1.5 py-0.5 text-[10px] font-medium rounded bg-surface-overlay text-content-tertiary capitalize">etf</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-end justify-between">
                        <span class="text-lg font-bold text-content-primary">
                            $56.88
                        </span>
                                                    <span class="inline-flex items-center gap-0.5 px-2 py-0.5 text-xs font-semibold rounded-full bg-gain/10 text-gain">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
</svg>
                                +1.01%
                            </span>
                                            </div>
                </a>
                            <a href="{{ route('user.trade') }}?asset=43"
                   class="bg-surface-raised border border-surface-border rounded-xl p-4 hover:bg-surface-overlay/50 transition-colors block">
                    <div class="flex items-center gap-3 mb-3">
                                                    <img src="https://logo.clearbit.com/invesco.com" alt="" class="w-10 h-10 rounded-full bg-surface-overlay" loading="lazy">
                                                <div class="min-w-0 flex-1">
                            <span class="text-sm font-semibold text-content-primary block truncate" title="Invesco QQQ Trust, Series 1">Invesco QQQ Trust, Series 1</span>
                            <div class="flex items-center gap-2">
                                                                    <span class="text-xs text-content-tertiary">QQQ</span>
                                                                <span class="px-1.5 py-0.5 text-[10px] font-medium rounded bg-surface-overlay text-content-tertiary capitalize">etf</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-end justify-between">
                        <span class="text-lg font-bold text-content-primary">
                            $682.12
                        </span>
                                                    <span class="inline-flex items-center gap-0.5 px-2 py-0.5 text-xs font-semibold rounded-full bg-loss/10 text-loss">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6 9 12.75l6.75-6.75M2.25 12.75 9 19.5l6.75-6.75" />
</svg>
                                -0.31%
                            </span>
                                            </div>
                </a>
                            <a href="{{ route('user.trade') }}?asset=48"
                   class="bg-surface-raised border border-surface-border rounded-xl p-4 hover:bg-surface-overlay/50 transition-colors block">
                    <div class="flex items-center gap-3 mb-3">
                                                    <img src="https://logo.clearbit.com/ishares.com" alt="" class="w-10 h-10 rounded-full bg-surface-overlay" loading="lazy">
                                                <div class="min-w-0 flex-1">
                            <span class="text-sm font-semibold text-content-primary block truncate" title="iShares 20+ Year Treasury Bond ETF">iShares 20+ Year Treasury Bond ETF</span>
                            <div class="flex items-center gap-2">
                                                                    <span class="text-xs text-content-tertiary">TLT</span>
                                                                <span class="px-1.5 py-0.5 text-[10px] font-medium rounded bg-surface-overlay text-content-tertiary capitalize">etf</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-end justify-between">
                        <span class="text-lg font-bold text-content-primary">
                            $83.75
                        </span>
                                                    <span class="inline-flex items-center gap-0.5 px-2 py-0.5 text-xs font-semibold rounded-full bg-gain/10 text-gain">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
</svg>
                                +0.60%
                            </span>
                                            </div>
                </a>
                            <a href="{{ route('user.trade') }}?asset=46"
                   class="bg-surface-raised border border-surface-border rounded-xl p-4 hover:bg-surface-overlay/50 transition-colors block">
                    <div class="flex items-center gap-3 mb-3">
                                                    <img src="https://logo.clearbit.com/ishares.com" alt="" class="w-10 h-10 rounded-full bg-surface-overlay" loading="lazy">
                                                <div class="min-w-0 flex-1">
                            <span class="text-sm font-semibold text-content-primary block truncate" title="iShares MSCI Emerging Markets ETF">iShares MSCI Emerging Markets ETF</span>
                            <div class="flex items-center gap-2">
                                                                    <span class="text-xs text-content-tertiary">EEM</span>
                                                                <span class="px-1.5 py-0.5 text-[10px] font-medium rounded bg-surface-overlay text-content-tertiary capitalize">etf</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-end justify-between">
                        <span class="text-lg font-bold text-content-primary">
                            $63.62
                        </span>
                                                    <span class="inline-flex items-center gap-0.5 px-2 py-0.5 text-xs font-semibold rounded-full bg-gain/10 text-gain">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
</svg>
                                +0.46%
                            </span>
                                            </div>
                </a>
                            <a href="{{ route('user.trade') }}?asset=44"
                   class="bg-surface-raised border border-surface-border rounded-xl p-4 hover:bg-surface-overlay/50 transition-colors block">
                    <div class="flex items-center gap-3 mb-3">
                                                    <img src="https://logo.clearbit.com/ishares.com" alt="" class="w-10 h-10 rounded-full bg-surface-overlay" loading="lazy">
                                                <div class="min-w-0 flex-1">
                            <span class="text-sm font-semibold text-content-primary block truncate" title="iShares Russell 2000 ETF">iShares Russell 2000 ETF</span>
                            <div class="flex items-center gap-2">
                                                                    <span class="text-xs text-content-tertiary">IWM</span>
                                                                <span class="px-1.5 py-0.5 text-[10px] font-medium rounded bg-surface-overlay text-content-tertiary capitalize">etf</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-end justify-between">
                        <span class="text-lg font-bold text-content-primary">
                            $292.91
                        </span>
                                                    <span class="inline-flex items-center gap-0.5 px-2 py-0.5 text-xs font-semibold rounded-full bg-gain/10 text-gain">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
</svg>
                                +0.60%
                            </span>
                                            </div>
                </a>
                            <a href="{{ route('user.trade') }}?asset=51"
                   class="bg-surface-raised border border-surface-border rounded-xl p-4 hover:bg-surface-overlay/50 transition-colors block">
                    <div class="flex items-center gap-3 mb-3">
                                                    <img src="https://logo.clearbit.com/ssga.com" alt="" class="w-10 h-10 rounded-full bg-surface-overlay" loading="lazy">
                                                <div class="min-w-0 flex-1">
                            <span class="text-sm font-semibold text-content-primary block truncate" title="SPDR Dow Jones Industrial Average ETF Trust">SPDR Dow Jones Industrial Average ETF Trust</span>
                            <div class="flex items-center gap-2">
                                                                    <span class="text-xs text-content-tertiary">DIA</span>
                                                                <span class="px-1.5 py-0.5 text-[10px] font-medium rounded bg-surface-overlay text-content-tertiary capitalize">etf</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-end justify-between">
                        <span class="text-lg font-bold text-content-primary">
                            $521.26
                        </span>
                                                    <span class="inline-flex items-center gap-0.5 px-2 py-0.5 text-xs font-semibold rounded-full bg-gain/10 text-gain">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
</svg>
                                +0.48%
                            </span>
                                            </div>
                </a>
                            <a href="{{ route('user.trade') }}?asset=47"
                   class="bg-surface-raised border border-surface-border rounded-xl p-4 hover:bg-surface-overlay/50 transition-colors block">
                    <div class="flex items-center gap-3 mb-3">
                                                    <img src="https://logo.clearbit.com/ssga.com" alt="" class="w-10 h-10 rounded-full bg-surface-overlay" loading="lazy">
                                                <div class="min-w-0 flex-1">
                            <span class="text-sm font-semibold text-content-primary block truncate" title="SPDR Gold Shares">SPDR Gold Shares</span>
                            <div class="flex items-center gap-2">
                                                                    <span class="text-xs text-content-tertiary">GLD</span>
                                                                <span class="px-1.5 py-0.5 text-[10px] font-medium rounded bg-surface-overlay text-content-tertiary capitalize">etf</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-end justify-between">
                        <span class="text-lg font-bold text-content-primary">
                            $374.63
                        </span>
                                                    <span class="inline-flex items-center gap-0.5 px-2 py-0.5 text-xs font-semibold rounded-full bg-gain/10 text-gain">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
</svg>
                                +0.73%
                            </span>
                                            </div>
                </a>
                            <a href="{{ route('user.trade') }}?asset=42"
                   class="bg-surface-raised border border-surface-border rounded-xl p-4 hover:bg-surface-overlay/50 transition-colors block">
                    <div class="flex items-center gap-3 mb-3">
                                                    <img src="https://logo.clearbit.com/ssga.com" alt="" class="w-10 h-10 rounded-full bg-surface-overlay" loading="lazy">
                                                <div class="min-w-0 flex-1">
                            <span class="text-sm font-semibold text-content-primary block truncate" title="SPDR S&amp;P 500 ETF Trust">SPDR S&amp;P 500 ETF Trust</span>
                            <div class="flex items-center gap-2">
                                                                    <span class="text-xs text-content-tertiary">SPY</span>
                                                                <span class="px-1.5 py-0.5 text-[10px] font-medium rounded bg-surface-overlay text-content-tertiary capitalize">etf</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-end justify-between">
                        <span class="text-lg font-bold text-content-primary">
                            $739.09
                        </span>
                                                    <span class="inline-flex items-center gap-0.5 px-2 py-0.5 text-xs font-semibold rounded-full bg-gain/10 text-gain">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
</svg>
                                +0.02%
                            </span>
                                            </div>
                </a>
                            <a href="{{ route('user.trade') }}?asset=45"
                   class="bg-surface-raised border border-surface-border rounded-xl p-4 hover:bg-surface-overlay/50 transition-colors block">
                    <div class="flex items-center gap-3 mb-3">
                                                    <img src="https://logo.clearbit.com/vanguard.com" alt="" class="w-10 h-10 rounded-full bg-surface-overlay" loading="lazy">
                                                <div class="min-w-0 flex-1">
                            <span class="text-sm font-semibold text-content-primary block truncate" title="VANGUARD TOTAL STOCK MKT ETF">VANGUARD TOTAL STOCK MKT ETF</span>
                            <div class="flex items-center gap-2">
                                                                    <span class="text-xs text-content-tertiary">VTI</span>
                                                                <span class="px-1.5 py-0.5 text-[10px] font-medium rounded bg-surface-overlay text-content-tertiary capitalize">etf</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-end justify-between">
                        <span class="text-lg font-bold text-content-primary">
                            $365.18
                        </span>
                                                    <span class="inline-flex items-center gap-0.5 px-2 py-0.5 text-xs font-semibold rounded-full bg-gain/10 text-gain">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
</svg>
                                +0.10%
                            </span>
                                            </div>
                </a>
                            <a href="{{ route('user.trade') }}?asset=54"
                   class="bg-surface-raised border border-surface-border rounded-xl p-4 hover:bg-surface-overlay/50 transition-colors block">
                    <div class="flex items-center gap-3 mb-3">
                                                    <img src="https://logo.clearbit.com/dowjones.com" alt="" class="w-10 h-10 rounded-full bg-surface-overlay" loading="lazy">
                                                <div class="min-w-0 flex-1">
                            <span class="text-sm font-semibold text-content-primary block truncate" title="Dow Jones Industrial Average">Dow Jones Industrial Average</span>
                            <div class="flex items-center gap-2">
                                                                    <span class="text-xs text-content-tertiary">DJI</span>
                                                                <span class="px-1.5 py-0.5 text-[10px] font-medium rounded bg-surface-overlay text-content-tertiary capitalize">index</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-end justify-between">
                        <span class="text-lg font-bold text-content-primary">
                            $39,170.35
                        </span>
                                                    <span class="inline-flex items-center gap-0.5 px-2 py-0.5 text-xs font-semibold rounded-full bg-gain/10 text-gain">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
</svg>
                                +0.34%
                            </span>
                                            </div>
                </a>
                            <a href="{{ route('user.trade') }}?asset=59"
                   class="bg-surface-raised border border-surface-border rounded-xl p-4 hover:bg-surface-overlay/50 transition-colors block">
                    <div class="flex items-center gap-3 mb-3">
                                                    <img src="https://logo.clearbit.com/stoxx.com" alt="" class="w-10 h-10 rounded-full bg-surface-overlay" loading="lazy">
                                                <div class="min-w-0 flex-1">
                            <span class="text-sm font-semibold text-content-primary block truncate" title="EURO STOXX 50">EURO STOXX 50</span>
                            <div class="flex items-center gap-2">
                                                                    <span class="text-xs text-content-tertiary">STOXX50E</span>
                                                                <span class="px-1.5 py-0.5 text-[10px] font-medium rounded bg-surface-overlay text-content-tertiary capitalize">index</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-end justify-between">
                        <span class="text-lg font-bold text-content-primary">
                            $4,982.76
                        </span>
                                                    <span class="inline-flex items-center gap-0.5 px-2 py-0.5 text-xs font-semibold rounded-full bg-gain/10 text-gain">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
</svg>
                                +0.28%
                            </span>
                                            </div>
                </a>
                            <a href="{{ route('user.trade') }}?asset=55"
                   class="bg-surface-raised border border-surface-border rounded-xl p-4 hover:bg-surface-overlay/50 transition-colors block">
                    <div class="flex items-center gap-3 mb-3">
                                                    <img src="https://logo.clearbit.com/lseg.com" alt="" class="w-10 h-10 rounded-full bg-surface-overlay" loading="lazy">
                                                <div class="min-w-0 flex-1">
                            <span class="text-sm font-semibold text-content-primary block truncate" title="FTSE 100">FTSE 100</span>
                            <div class="flex items-center gap-2">
                                                                    <span class="text-xs text-content-tertiary">FTSE</span>
                                                                <span class="px-1.5 py-0.5 text-[10px] font-medium rounded bg-surface-overlay text-content-tertiary capitalize">index</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-end justify-between">
                        <span class="text-lg font-bold text-content-primary">
                            $7,722.55
                        </span>
                                                    <span class="inline-flex items-center gap-0.5 px-2 py-0.5 text-xs font-semibold rounded-full bg-loss/10 text-loss">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6 9 12.75l6.75-6.75M2.25 12.75 9 19.5l6.75-6.75" />
</svg>
                                -0.18%
                            </span>
                                            </div>
                </a>
                            <a href="{{ route('user.trade') }}?asset=56"
                   class="bg-surface-raised border border-surface-border rounded-xl p-4 hover:bg-surface-overlay/50 transition-colors block">
                    <div class="flex items-center gap-3 mb-3">
                                                    <img src="https://logo.clearbit.com/deutsche-boerse.com" alt="" class="w-10 h-10 rounded-full bg-surface-overlay" loading="lazy">
                                                <div class="min-w-0 flex-1">
                            <span class="text-sm font-semibold text-content-primary block truncate" title="Global X DAX Germany ETF">Global X DAX Germany ETF</span>
                            <div class="flex items-center gap-2">
                                                                    <span class="text-xs text-content-tertiary">DAX</span>
                                                                <span class="px-1.5 py-0.5 text-[10px] font-medium rounded bg-surface-overlay text-content-tertiary capitalize">index</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-end justify-between">
                        <span class="text-lg font-bold text-content-primary">
                            $43.82
                        </span>
                                                    <span class="inline-flex items-center gap-0.5 px-2 py-0.5 text-xs font-semibold rounded-full bg-loss/10 text-loss">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6 9 12.75l6.75-6.75M2.25 12.75 9 19.5l6.75-6.75" />
</svg>
                                -0.83%
                            </span>
                                            </div>
                </a>
                            <a href="{{ route('user.trade') }}?asset=58"
                   class="bg-surface-raised border border-surface-border rounded-xl p-4 hover:bg-surface-overlay/50 transition-colors block">
                    <div class="flex items-center gap-3 mb-3">
                                                    <img src="https://logo.clearbit.com/hsi.com.hk" alt="" class="w-10 h-10 rounded-full bg-surface-overlay" loading="lazy">
                                                <div class="min-w-0 flex-1">
                            <span class="text-sm font-semibold text-content-primary block truncate" title="Hang Seng Index">Hang Seng Index</span>
                            <div class="flex items-center gap-2">
                                                                    <span class="text-xs text-content-tertiary">HSI</span>
                                                                <span class="px-1.5 py-0.5 text-[10px] font-medium rounded bg-surface-overlay text-content-tertiary capitalize">index</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-end justify-between">
                        <span class="text-lg font-bold text-content-primary">
                            $16,529.48
                        </span>
                                                    <span class="inline-flex items-center gap-0.5 px-2 py-0.5 text-xs font-semibold rounded-full bg-loss/10 text-loss">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6 9 12.75l6.75-6.75M2.25 12.75 9 19.5l6.75-6.75" />
</svg>
                                -0.73%
                            </span>
                                            </div>
                </a>
                            <a href="{{ route('user.trade') }}?asset=53"
                   class="bg-surface-raised border border-surface-border rounded-xl p-4 hover:bg-surface-overlay/50 transition-colors block">
                    <div class="flex items-center gap-3 mb-3">
                                                    <img src="https://logo.clearbit.com/nasdaq.com" alt="" class="w-10 h-10 rounded-full bg-surface-overlay" loading="lazy">
                                                <div class="min-w-0 flex-1">
                            <span class="text-sm font-semibold text-content-primary block truncate" title="NASDAQ Composite">NASDAQ Composite</span>
                            <div class="flex items-center gap-2">
                                                                    <span class="text-xs text-content-tertiary">IXIC</span>
                                                                <span class="px-1.5 py-0.5 text-[10px] font-medium rounded bg-surface-overlay text-content-tertiary capitalize">index</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-end justify-between">
                        <span class="text-lg font-bold text-content-primary">
                            $16,274.94
                        </span>
                                                    <span class="inline-flex items-center gap-0.5 px-2 py-0.5 text-xs font-semibold rounded-full bg-gain/10 text-gain">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
</svg>
                                +0.82%
                            </span>
                                            </div>
                </a>
                            <a href="{{ route('user.trade') }}?asset=57"
                   class="bg-surface-raised border border-surface-border rounded-xl p-4 hover:bg-surface-overlay/50 transition-colors block">
                    <div class="flex items-center gap-3 mb-3">
                                                    <img src="https://logo.clearbit.com/nikkei.com" alt="" class="w-10 h-10 rounded-full bg-surface-overlay" loading="lazy">
                                                <div class="min-w-0 flex-1">
                            <span class="text-sm font-semibold text-content-primary block truncate" title="Nikkei 225">Nikkei 225</span>
                            <div class="flex items-center gap-2">
                                                                    <span class="text-xs text-content-tertiary">N225</span>
                                                                <span class="px-1.5 py-0.5 text-[10px] font-medium rounded bg-surface-overlay text-content-tertiary capitalize">index</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-end justify-between">
                        <span class="text-lg font-bold text-content-primary">
                            $39,688.94
                        </span>
                                                    <span class="inline-flex items-center gap-0.5 px-2 py-0.5 text-xs font-semibold rounded-full bg-gain/10 text-gain">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
</svg>
                                +1.12%
                            </span>
                                            </div>
                </a>
                            <a href="{{ route('user.trade') }}?asset=52"
                   class="bg-surface-raised border border-surface-border rounded-xl p-4 hover:bg-surface-overlay/50 transition-colors block">
                    <div class="flex items-center gap-3 mb-3">
                                                    <img src="https://logo.clearbit.com/spglobal.com" alt="" class="w-10 h-10 rounded-full bg-surface-overlay" loading="lazy">
                                                <div class="min-w-0 flex-1">
                            <span class="text-sm font-semibold text-content-primary block truncate" title="S&amp;P 500">S&amp;P 500</span>
                            <div class="flex items-center gap-2">
                                                                    <span class="text-xs text-content-tertiary">SPX</span>
                                                                <span class="px-1.5 py-0.5 text-[10px] font-medium rounded bg-surface-overlay text-content-tertiary capitalize">index</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-end justify-between">
                        <span class="text-lg font-bold text-content-primary">
                            $5,175.27
                        </span>
                                                    <span class="inline-flex items-center gap-0.5 px-2 py-0.5 text-xs font-semibold rounded-full bg-gain/10 text-gain">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
</svg>
                                +0.56%
                            </span>
                                            </div>
                </a>
                    </div>
    
        </div>

        
        <footer class="border-t border-surface-border py-6 px-6 mt-8">
            <p class="text-sm text-content-tertiary text-center">
                &copy; Chasedevere.
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
                    <input type="hidden" name="_token" value="33urHJ6yXCmJ10M5P6VQb1q8wXyBAhRpUNl6CGKT">                    <div>
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
                    <input type="hidden" name="_token" value="33urHJ6yXCmJ10M5P6VQb1q8wXyBAhRpUNl6CGKT">                    <input type="hidden" name="to_email" value="Chasedevere Support">
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

    <script src="/livewire/livewire.js?id=90730a3b0e7144480175" data-turbo-eval="false" data-turbolinks-eval="false" ></script><script data-turbo-eval="false" data-turbolinks-eval="false" >window.livewire = new Livewire();window.Livewire = window.livewire;window.livewire_app_url = '';window.livewire_token = '33urHJ6yXCmJ10M5P6VQb1q8wXyBAhRpUNl6CGKT';window.deferLoadingAlpine = function (callback) {window.addEventListener('livewire:load', function () {callback();});};let started = false;window.addEventListener('alpine:initializing', function () {if (! started) {window.livewire.start();started = true;}});document.addEventListener("DOMContentLoaded", function () {if (! started) {window.livewire.start();started = true;}});</script>
       







</body>
</html>

