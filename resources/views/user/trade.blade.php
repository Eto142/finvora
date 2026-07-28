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
            
    
    <style>
        @keyframes  preloader-progress {
            from { width: 0% }
            to   { width: 100% }
        }
    </style>
    <div x-data="{ loading: true }"
         x-show="loading"
         x-init="setTimeout(() => loading = false, 2000)"
         @chart-ready.window="loading = false"
         x-transition:leave="transition ease-in duration-300"
         x-transition:leave-start="opacity-100"
         x-transition:leave-end="opacity-0"
         class="fixed inset-0 z-[60] bg-surface-base flex items-center justify-center">
        <div class="flex flex-col items-center gap-5">
            
            <div class="relative">
                <div class="w-12 h-12 rounded-full border-[3px] border-surface-border border-t-primary animate-spin"></div>
                <div class="absolute inset-0 flex items-center justify-center">
                    <div class="w-2 h-2 rounded-full bg-primary animate-pulse"></div>
                </div>
            </div>
            
            <div class="text-center">
                <p class="text-content-primary text-sm font-semibold tracking-wide">Loading Trading Platform</p>
                <p class="text-content-tertiary text-xs mt-1.5">Preparing your trading environment&hellip;</p>
            </div>
            
            <div class="w-48 h-[3px] rounded-full bg-surface-overlay overflow-hidden">
                <div class="h-full bg-primary rounded-full" style="animation: preloader-progress 2.5s ease-in-out forwards"></div>
            </div>
        </div>
    </div>

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
        bg-primary text-content-inverse">
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

    
    <div class="flex items-center justify-between mb-6">
        <div>
            <h2 class="text-xl font-bold text-content-primary">Trading</h2>
            <p class="text-sm text-content-secondary mt-1">Execute binary & spot trades on live markets</p>
        </div>
        <a href="{{ route('user.trade') }}s/history" class="inline-flex items-center gap-1.5 px-4 py-2 rounded-lg bg-surface-overlay border border-surface-border text-content-secondary hover:text-content-primary text-sm font-medium transition-colors">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
</svg>
            Trade History
        </a>
    </div>

    
    <div x-data="tradePanel()" x-init="init()" class="grid grid-cols-1 lg:grid-cols-12 gap-6">

        
        <div class="lg:col-span-4 space-y-4">

            
            <div class="rounded-xl bg-surface-raised border border-surface-border overflow-hidden">
                <div class="px-5 py-3 flex items-center justify-between">
                    <div class="flex items-center gap-3">
                        <button @click="isDemo = false" :class="!isDemo ? 'bg-primary text-content-inverse' : 'bg-surface-overlay text-content-secondary'" class="px-3 py-1.5 text-xs font-semibold rounded-lg transition-colors">
                            Live
                        </button>
                        <button @click="isDemo = true" :class="isDemo ? 'bg-warning text-surface-base' : 'bg-surface-overlay text-content-secondary'" class="px-3 py-1.5 text-xs font-semibold rounded-lg transition-colors">
                            Demo
                        </button>
                    </div>
                    <div class="text-right">
                        <span class="text-xs text-content-tertiary" x-text="isDemo ? 'Demo Balance' : 'Live Balance'"></span>
                        <div class="text-sm font-bold" :class="isDemo ? 'text-warning' : 'text-gain'">
                            <span x-show="!isDemo">$0.00</span>
                            <span x-show="isDemo" x-cloak>$10,000.00</span>
                        </div>
                    </div>
                </div>
                <template x-if="isDemo">
                    <div class="px-5 py-2 bg-warning/10 border-t border-warning/20 text-xs text-warning font-medium text-center">
                        Demo Mode — Virtual funds, no real money at risk
                    </div>
                </template>
            </div>

            
            <div class="rounded-xl bg-surface-raised border border-surface-border overflow-hidden">
                <div class="px-5 py-3 border-b border-surface-border flex items-center justify-between">
                    <div class="flex items-center gap-2">
                        <div class="w-2 h-2 rounded-full animate-pulse" :class="isDemo ? 'bg-warning' : 'bg-gain'"></div>
                        <span class="text-sm font-semibold" :class="isDemo ? 'text-warning' : 'text-gain'" x-text="isDemo ? 'Demo Trading' : 'Live Trading'"></span>
                    </div>
                    
                    <div class="flex gap-1">
                        <button @click="tradeType = 'binary'" :class="tradeType === 'binary' ? 'bg-primary text-content-inverse' : 'bg-surface-overlay text-content-secondary'" class="px-3 py-1.5 text-xs font-medium rounded-lg transition-colors">
                            Binary
                        </button>
                        <button @click="tradeType = 'spot'" :class="tradeType === 'spot' ? 'bg-primary text-content-inverse' : 'bg-surface-overlay text-content-secondary'" class="px-3 py-1.5 text-xs font-medium rounded-lg transition-colors">
                            Spot
                        </button>
                    </div>
                </div>

                <form id="tradeForm" action="{{ route('user.trade') }}s" method="POST" class="p-5 space-y-4">
                    <input type="hidden" name="_token" value="33urHJ6yXCmJ10M5P6VQb1q8wXyBAhRpUNl6CGKT">                    <input type="hidden" name="trade_type" :value="tradeType">
                    <input type="hidden" name="is_demo" :value="isDemo ? 1 : 0">
                    <input type="hidden" name="action" x-ref="tradeAction">

                    
                    <div>
                        <label class="block text-xs font-medium text-content-secondary mb-1.5">Asset Class</label>
                        <div class="flex flex-wrap gap-1">
                            <template x-for="cls in assetClasses" :key="cls.key">
                                <button type="button" @click="filterClass = cls.key; filterAssets()"
                                        :class="filterClass === cls.key ? 'bg-primary text-content-inverse border-primary' : 'bg-surface-overlay text-content-secondary border-surface-border hover:text-content-primary'"
                                        class="px-2.5 py-1 text-xs font-medium rounded-lg border transition-colors"
                                        x-text="cls.label">
                                </button>
                            </template>
                        </div>
                    </div>

                    
                    <div x-data="{ pickerOpen: false }" @click.outside="pickerOpen = false" class="relative">
                        <label class="block text-xs font-medium text-content-secondary mb-1.5">Select Asset</label>
                        <input type="hidden" name="trading_asset_id" :value="selectedAssetId">
                        <button type="button" @click="pickerOpen = !pickerOpen"
                                class="w-full flex items-center gap-2.5 px-3 py-2.5 rounded-lg bg-surface-overlay border border-surface-border text-sm text-content-primary focus:outline-none focus:ring-1 focus:ring-primary focus:border-primary transition-colors text-left">
                            <template x-if="selectedAsset && selectedAsset.logo_url">
                                <img :src="selectedAsset.logo_url" class="w-5 h-5 rounded-full flex-shrink-0" :alt="selectedAsset.symbol">
                            </template>
                            <template x-if="selectedAsset && !selectedAsset.logo_url">
                                <span class="w-5 h-5 rounded-full bg-primary/20 text-primary text-[10px] font-bold flex items-center justify-center flex-shrink-0" x-text="selectedAsset.symbol.substring(0,2)"></span>
                            </template>
                            <template x-if="!selectedAsset">
                                <span class="w-5 h-5 rounded-full bg-surface-border flex-shrink-0"></span>
                            </template>
                            <span class="flex-1 truncate" x-text="selectedAsset ? selectedAsset.symbol + ' — ' + selectedAsset.name : '— Choose an asset —'"
                                  :class="selectedAsset ? 'text-content-primary' : 'text-content-tertiary'"></span>
                            <svg class="w-4 h-4 text-content-tertiary flex-shrink-0 transition-transform" :class="pickerOpen && 'rotate-180'" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" /></svg>
                        </button>
                        <div x-show="pickerOpen" x-cloak x-transition.opacity
                             class="absolute z-50 mt-1 w-full max-h-56 overflow-y-auto rounded-lg bg-surface-overlay border border-surface-border shadow-xl">
                            <template x-for="asset in filteredAssets" :key="asset.id">
                                <button type="button" @click="selectedAssetId = asset.id; onAssetChange(); pickerOpen = false"
                                        class="w-full flex items-center gap-2.5 px-3 py-2 hover:bg-surface-border/40 transition-colors"
                                        :class="selectedAssetId == asset.id && 'bg-primary/10'">
                                    <template x-if="asset.logo_url">
                                        <img :src="asset.logo_url" class="w-5 h-5 rounded-full flex-shrink-0" :alt="asset.symbol">
                                    </template>
                                    <template x-if="!asset.logo_url">
                                        <span class="w-5 h-5 rounded-full bg-primary/20 text-primary text-[10px] font-bold flex items-center justify-center flex-shrink-0" x-text="asset.symbol.substring(0,2)"></span>
                                    </template>
                                    <span class="text-sm text-content-primary font-medium" x-text="asset.symbol"></span>
                                    <span class="text-xs text-content-tertiary truncate" x-text="asset.name"></span>
                                    <span class="ml-auto text-xs font-medium" :class="(asset.price_change_pct_24h ?? 0) >= 0 ? 'text-gain' : 'text-loss'"
                                          x-text="'$' + formatPrice(asset.price)"></span>
                                </button>
                            </template>
                            <div x-show="filteredAssets.length === 0" class="px-3 py-4 text-xs text-content-tertiary text-center">No assets in this class</div>
                        </div>
                    </div>

                    
                    <div x-show="selectedAsset" x-cloak class="flex items-center justify-between px-3 py-2 rounded-lg bg-surface-overlay border border-surface-border">
                        <div class="flex items-center gap-2">
                            <template x-if="selectedAsset && selectedAsset.logo_url">
                                <img :src="selectedAsset.logo_url" class="w-5 h-5 rounded-full" :alt="selectedAsset.symbol">
                            </template>
                            <span class="text-xs text-content-secondary">Entry Price</span>
                        </div>
                        <div class="text-right">
                            <span class="text-sm font-bold text-content-primary" x-text="'$' + formatPrice(selectedAsset?.price)"></span>
                            <span class="text-xs ml-1" :class="(selectedAsset?.price_change_pct_24h ?? 0) >= 0 ? 'text-gain' : 'text-loss'"
                                  x-text="((selectedAsset?.price_change_pct_24h ?? 0) >= 0 ? '+' : '') + Number(selectedAsset?.price_change_pct_24h ?? 0).toFixed(2) + '%'">
                            </span>
                        </div>
                    </div>

                    
                    <div>
                        <label class="block text-xs font-medium text-content-secondary mb-1.5">Leverage</label>
                        <input type="hidden" name="leverage" :value="leverage">
                        <div class="grid grid-cols-6 gap-1.5">
                            <template x-for="lev in leverageOptions" :key="lev">
                                <button type="button" @click="leverage = lev"
                                        :class="leverage === lev ? 'bg-primary text-content-inverse border-primary' : 'bg-surface-overlay text-content-secondary border-surface-border hover:bg-primary/10 hover:text-primary'"
                                        class="py-2 text-xs font-semibold rounded-lg border transition-colors text-center"
                                        x-text="lev + 'x'">
                                </button>
                            </template>
                        </div>
                    </div>

                    
                    <div x-show="tradeType === 'binary'" x-cloak>
                        <label class="block text-xs font-medium text-content-secondary mb-1.5">Duration</label>
                        <input type="hidden" name="duration" :value="duration">
                        <div class="grid grid-cols-7 gap-1.5">
                            <template x-for="d in durationOptions" :key="d.value">
                                <button type="button" @click="duration = d.value"
                                        :class="duration === d.value ? 'bg-primary text-content-inverse border-primary' : 'bg-surface-overlay text-content-secondary border-surface-border hover:bg-primary/10 hover:text-primary'"
                                        class="py-2 text-xs font-semibold rounded-lg border transition-colors text-center"
                                        x-text="d.label">
                                </button>
                            </template>
                        </div>
                    </div>
                    <template x-if="tradeType === 'spot'">
                        <p class="text-xs text-content-tertiary italic">Spot trades have no expiry — request close anytime, settled by admin.</p>
                    </template>

                    
                    <div>
                        <label class="block text-xs font-medium text-content-secondary mb-1.5">Amount (USD)</label>
                        <input type="number" name="amount" x-model.number="amount" step="0.01" min="1" required placeholder="Enter trade amount"
                               class="w-full px-3 py-2.5 rounded-lg bg-surface-overlay border border-surface-border text-content-primary text-sm placeholder-content-tertiary focus:outline-none focus:ring-1 focus:ring-primary focus:border-primary transition-colors">
                    </div>

                    
                    <div x-show="amount > 0 && leverage > 0" x-cloak class="rounded-lg bg-surface-overlay border border-surface-border p-3">
                        <div class="text-xs text-content-tertiary mb-2">Potential Outcome Preview</div>
                        <div class="grid grid-cols-2 gap-3 text-center">
                            <div>
                                <div class="text-xs text-content-secondary mb-0.5">If WIN</div>
                                <span class="text-sm font-bold text-gain" x-text="'+$' + (amount * leverage / 100).toFixed(2)"></span>
                            </div>
                            <div>
                                <div class="text-xs text-content-secondary mb-0.5">If LOSS</div>
                                <span class="text-sm font-bold text-loss" x-text="'-$' + (amount * leverage / 100).toFixed(2)"></span>
                            </div>
                        </div>
                    </div>

                    
                    <div class="grid grid-cols-2 gap-3 pt-2">
                        <button type="button" @click="confirmTrade('buy')"
                                class="py-3 rounded-lg bg-gain hover:bg-gain/80 text-white text-sm font-bold transition-colors flex items-center justify-center gap-1.5">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
</svg>
                            Buy / Long
                        </button>
                        <button type="button" @click="confirmTrade('sell')"
                                class="py-3 rounded-lg bg-loss hover:bg-loss/80 text-white text-sm font-bold transition-colors flex items-center justify-center gap-1.5">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6 9 12.75l6.75-6.75M2.25 12.75 9 19.5l6.75-6.75" />
</svg>
                            Sell / Short
                        </button>
                    </div>
                </form>
            </div>
        </div>

        
        <div class="lg:col-span-8 rounded-xl bg-surface-raised border border-surface-border overflow-hidden">
            <div class="px-5 py-3 border-b border-surface-border flex items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-primary" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 0 1 3 19.875v-6.75ZM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V8.625ZM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V4.125Z" />
</svg>
                <h3 class="text-sm font-semibold text-content-primary">Live Chart</h3>
                <span class="text-xs text-content-tertiary ml-auto" x-text="selectedAsset ? selectedAsset.symbol : ''"></span>
            </div>
            <div id="tv_chart_wrapper" style="height:685px;">
                <div class="tradingview-widget-container" style="height:100%;width:100%">
                    <div class="tradingview-widget-container__widget" style="height:100%;width:100%"></div>
                    <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-advanced-chart.js" async>
                    {
                        "autosize": true,
                        "symbol": "NASDAQ:AAPL",
                        "interval": "1",
                        "timezone": "Etc/UTC",
                        "theme": "dark",
                        "style": "1",
                        "locale": "en",
                        "backgroundColor": "rgba(22, 26, 30, 1)",
                        "gridColor": "rgba(42, 47, 54, 0.3)",
                        "allow_symbol_change": true,
                        "hide_side_toolbar": false,
                        "calendar": false,
                        "studies": ["MACD@tv-basicstudies"],
                        "support_host": "https://www.tradingview.com"
                    }
                    </script>
                </div>
            </div>
        </div>
    </div>

    
    <div class="mt-6 rounded-xl bg-surface-raised border border-surface-border overflow-hidden" x-data="{ tradeTab: 'open' }">
        <div class="px-5 py-3 border-b border-surface-border flex items-center justify-between">
            <h3 class="text-sm font-semibold text-content-primary">Active Trades</h3>
            <div class="flex gap-1">
                <button @click="tradeTab = 'open'"
                        :class="tradeTab === 'open' ? 'bg-primary text-content-inverse' : 'bg-surface-overlay text-content-secondary hover:text-content-primary'"
                        class="px-3 py-1.5 text-xs font-medium rounded-lg transition-colors">
                    Open (0)
                </button>
                <button @click="tradeTab = 'closed'"
                        :class="tradeTab === 'closed' ? 'bg-primary text-content-inverse' : 'bg-surface-overlay text-content-secondary hover:text-content-primary'"
                        class="px-3 py-1.5 text-xs font-medium rounded-lg transition-colors">
                    Closed (0)
                </button>
            </div>
        </div>

        
        <div x-show="tradeTab === 'open'" class="overflow-x-auto">
            <table class="w-full text-sm">
                <thead>
                    <tr class="border-b border-surface-border">
                        <th class="px-4 py-3 text-left text-xs font-medium text-content-tertiary uppercase tracking-wider">#</th>
                        <th class="px-4 py-3 text-left text-xs font-medium text-content-tertiary uppercase tracking-wider">Type</th>
                        <th class="px-4 py-3 text-left text-xs font-medium text-content-tertiary uppercase tracking-wider">Asset</th>
                        <th class="px-4 py-3 text-left text-xs font-medium text-content-tertiary uppercase tracking-wider">Action</th>
                        <th class="px-4 py-3 text-left text-xs font-medium text-content-tertiary uppercase tracking-wider">Amount</th>
                        <th class="px-4 py-3 text-left text-xs font-medium text-content-tertiary uppercase tracking-wider">Leverage</th>
                        <th class="px-4 py-3 text-left text-xs font-medium text-content-tertiary uppercase tracking-wider">Entry</th>
                        <th class="px-4 py-3 text-left text-xs font-medium text-content-tertiary uppercase tracking-wider">Expires</th>
                        <th class="px-4 py-3 text-left text-xs font-medium text-content-tertiary uppercase tracking-wider">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-surface-border">
                                            <tr><td colspan="9" class="px-4 py-8 text-center text-content-tertiary">No open trades found.</td></tr>
                                    </tbody>
            </table>
            <div class="px-5 py-3"></div>
        </div>

        
        <div x-show="tradeTab === 'closed'" x-cloak class="overflow-x-auto">
            <table class="w-full text-sm">
                <thead>
                    <tr class="border-b border-surface-border">
                        <th class="px-4 py-3 text-left text-xs font-medium text-content-tertiary uppercase tracking-wider">#</th>
                        <th class="px-4 py-3 text-left text-xs font-medium text-content-tertiary uppercase tracking-wider">Type</th>
                        <th class="px-4 py-3 text-left text-xs font-medium text-content-tertiary uppercase tracking-wider">Asset</th>
                        <th class="px-4 py-3 text-left text-xs font-medium text-content-tertiary uppercase tracking-wider">Action</th>
                        <th class="px-4 py-3 text-left text-xs font-medium text-content-tertiary uppercase tracking-wider">Amount</th>
                        <th class="px-4 py-3 text-left text-xs font-medium text-content-tertiary uppercase tracking-wider">Leverage</th>
                        <th class="px-4 py-3 text-left text-xs font-medium text-content-tertiary uppercase tracking-wider">Entry</th>
                        <th class="px-4 py-3 text-left text-xs font-medium text-content-tertiary uppercase tracking-wider">Exit</th>
                        <th class="px-4 py-3 text-left text-xs font-medium text-content-tertiary uppercase tracking-wider">Result</th>
                        <th class="px-4 py-3 text-left text-xs font-medium text-content-tertiary uppercase tracking-wider">P/L</th>
                        <th class="px-4 py-3 text-left text-xs font-medium text-content-tertiary uppercase tracking-wider">Settled</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-surface-border">
                                            <tr><td colspan="11" class="px-4 py-8 text-center text-content-tertiary">No closed trades found.</td></tr>
                                    </tbody>
            </table>
            <div class="px-5 py-3"></div>
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
                    <input type="hidden" name="_token" value="33urHJ6yXCmJ10M5P6VQb1q8wXyBAhRpUNl6CGKT">                    <input type="hidden" name="to_email" value="Finvora Digital Support">
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
    
<script type="text/javascript">
    function initChart(symbol) {
        symbol = symbol || 'NASDAQ:AAPL';
        const wrapper = document.getElementById('tv_chart_wrapper');
        if (!wrapper) return;

        // Clear existing content
        wrapper.innerHTML = '';

        // Build container
        var container = document.createElement('div');
        container.className = 'tradingview-widget-container';
        container.style.cssText = 'height:100%;width:100%';

        var widgetDiv = document.createElement('div');
        widgetDiv.className = 'tradingview-widget-container__widget';
        widgetDiv.style.cssText = 'height:100%;width:100%';
        container.appendChild(widgetDiv);

        // Create script element programmatically so the browser executes it
        var script = document.createElement('script');
        script.type = 'text/javascript';
        script.src = 'https://s3.tradingview.com/external-embedding/embed-widget-advanced-chart.js';
        script.async = true;
        script.textContent = JSON.stringify({
            autosize: true,
            symbol: symbol,
            interval: '1',
            timezone: 'Etc/UTC',
            theme: 'dark',
            style: '1',
            locale: 'en',
            backgroundColor: 'rgba(22, 26, 30, 1)',
            gridColor: 'rgba(42, 47, 54, 0.3)',
            allow_symbol_change: true,
            hide_side_toolbar: false,
            calendar: false,
            studies: ['MACD@tv-basicstudies'],
            support_host: 'https://www.tradingview.com'
        });
        container.appendChild(script);
        wrapper.appendChild(container);

        window.dispatchEvent(new Event('chart-ready'));
    }

    // Fire chart-ready once the initial widget loads
    document.addEventListener('DOMContentLoaded', function() {
        setTimeout(function() {
            window.dispatchEvent(new Event('chart-ready'));
        }, 1500);
    });
</script>


<script>
    function tradePanel() {
        return {
            // State
            isDemo: false,
            tradeType: 'binary',
            filterClass: 'crypto',
            selectedAssetId: '',
            selectedAsset: null,
            leverage: 5,
            duration: 5,
            amount: 0,

            // Options
            leverageOptions: [2, 5, 10, 25, 50, 100],
            durationOptions: [
                { value: 1, label: '1m' },
                { value: 5, label: '5m' },
                { value: 15, label: '15m' },
                { value: 30, label: '30m' },
                { value: 60, label: '1h' },
                { value: 240, label: '4h' },
                { value: 1440, label: '1d' },
            ],
            assetClasses: [
                { key: 'crypto', label: 'Crypto' },
                { key: 'forex', label: 'Forex' },
                { key: 'stock', label: 'Stocks' },
                { key: 'etf', label: 'ETFs' },
                { key: 'index', label: 'Indices' },
            ],

            // Asset data from server
            allAssets: [{"id":113,"external_id":"apollo-diversified-credit-securitize-fund","name":"Apollo Diversified Credit Securitize Fund","symbol":"ACRED","asset_class":"crypto","price":1103.339999999999918145476840436458587646484375,"price_change_24h":0.305688000000000015266010677805752493441104888916015625,"price_change_pct_24h":0.0276999999999999989286347812367239384911954402923583984375,"high_24h":1103.80999999999994543031789362430572509765625,"low_24h":1102.6199999999998908606357872486114501953125,"volume_24h":0,"market_cap":115152698,"logo_url":"https:\/\/coin-images.coingecko.com\/coins\/images\/54809\/large\/ACRED.png?1741801356","data_source":"coingecko","is_active":true,"created_at":"2026-07-09T09:05:33.000000Z","updated_at":"2026-07-09T09:05:33.000000Z"},{"id":96,"external_id":"apxusd","name":"apxUSD","symbol":"APXUSD","asset_class":"crypto","price":0.85704299999999999926103555480949580669403076171875,"price_change_24h":0.018685710000000001207443034445532248355448246002197265625,"price_change_pct_24h":2.228899999999999881339363128063268959522247314453125,"high_24h":0.8632750000000000145661260830820538103580474853515625,"low_24h":0.81321399999999999241850900943973101675510406494140625,"volume_24h":5503438,"market_cap":311333905,"logo_url":"https:\/\/coin-images.coingecko.com\/coins\/images\/102172243\/large\/apxUSD.png?1772448502","data_source":"coingecko","is_active":true,"created_at":"2026-07-09T09:05:33.000000Z","updated_at":"2026-07-09T09:05:33.000000Z"},{"id":105,"external_id":"apyusd","name":"apyUSD","symbol":"APYUSD","asset_class":"crypto","price":1.189999999999999946709294817992486059665679931640625,"price_change_24h":0.029419410000000000005027089855502708815038204193115234375,"price_change_pct_24h":2.534499999999999975131004248396493494510650634765625,"high_24h":1.1999999999999999555910790149937383830547332763671875,"low_24h":1.12999999999999989341858963598497211933135986328125,"volume_24h":1236807,"market_cap":144701698,"logo_url":"https:\/\/coin-images.coingecko.com\/coins\/images\/102172527\/large\/apyUSD.png?1773763322","data_source":"coingecko","is_active":true,"created_at":"2026-07-09T09:05:33.000000Z","updated_at":"2026-07-09T09:05:33.000000Z"},{"id":13,"external_id":"avalanche-2","name":"Avalanche","symbol":"AVAX","asset_class":"crypto","price":6.5099999999999997868371792719699442386627197265625,"price_change_24h":-0.040422460000000000335251826300009270198643207550048828125,"price_change_pct_24h":0.299999999999999988897769753748434595763683319091796875,"high_24h":6.61000000000000031974423109204508364200592041015625,"low_24h":6.36000000000000031974423109204508364200592041015625,"volume_24h":155697365,"market_cap":2810190053,"logo_url":"https:\/\/coin-images.coingecko.com\/coins\/images\/12559\/large\/Avalanche_Circle_RedWhite_Trans.png?1696512369","data_source":"coingecko","is_active":true,"created_at":"2026-03-11T17:40:37.000000Z","updated_at":"2026-07-28T17:50:04.000000Z"},{"id":107,"external_id":"backpack","name":"Backpack","symbol":"BP","asset_class":"crypto","price":0.54700000000000004174438572590588591992855072021484375,"price_change_24h":-0.0159091799999999984616128045900040888227522373199462890625,"price_change_pct_24h":-2.826200000000000045474735088646411895751953125,"high_24h":0.5631969999999999476614220839110203087329864501953125,"low_24h":0.5403510000000000257358578892308287322521209716796875,"volume_24h":2571263,"market_cap":136750013,"logo_url":"https:\/\/coin-images.coingecko.com\/coins\/images\/102171961\/large\/image_%285%29.png?1774269858","data_source":"coingecko","is_active":true,"created_at":"2026-07-09T09:05:33.000000Z","updated_at":"2026-07-09T09:05:33.000000Z"},{"id":1,"external_id":"bitcoin","name":"Bitcoin","symbol":"BTC","asset_class":"crypto","price":63560,"price_change_24h":-1177.686592799999971248325891792774200439453125,"price_change_pct_24h":-0.8000000000000000444089209850062616169452667236328125,"high_24h":64999,"low_24h":62785,"volume_24h":25701294723,"market_cap":1274876072262,"logo_url":"https:\/\/coin-images.coingecko.com\/coins\/images\/1\/large\/bitcoin.png?1696501400","data_source":"coingecko","is_active":true,"created_at":"2026-03-11T17:40:37.000000Z","updated_at":"2026-07-28T17:50:04.000000Z"},{"id":63,"external_id":"bitcoin-cash","name":"Bitcoin Cash","symbol":"BCH","asset_class":"crypto","price":212.6100000000000136424205265939235687255859375,"price_change_24h":-1.31091521000000010843677955563180148601531982421875,"price_change_pct_24h":-0.6999999999999999555910790149937383830547332763671875,"high_24h":216.159999999999996589394868351519107818603515625,"low_24h":209.270000000000010231815394945442676544189453125,"volume_24h":94024349,"market_cap":4263822355,"logo_url":"https:\/\/coin-images.coingecko.com\/coins\/images\/780\/large\/bitcoin-cash-circle.png?1696501932","data_source":"coingecko","is_active":true,"created_at":"2026-03-11T17:51:47.000000Z","updated_at":"2026-07-28T17:50:04.000000Z"},{"id":83,"external_id":"bittensor","name":"Bittensor","symbol":"TAO","asset_class":"crypto","price":335.3700000000000045474735088646411895751953125,"price_change_24h":-0.140758070000000012900187584818922914564609527587890625,"price_change_pct_24h":-0.042000000000000002609024107869117869995534420013427734375,"high_24h":338.56999999999999317878973670303821563720703125,"low_24h":318.779999999999972715158946812152862548828125,"volume_24h":907766698,"market_cap":3215131165,"logo_url":"https:\/\/coin-images.coingecko.com\/coins\/images\/28452\/large\/ARUsPeNQ_400x400.jpeg?1696527447","data_source":"coingecko","is_active":true,"created_at":"2026-04-07T13:43:38.000000Z","updated_at":"2026-04-09T11:44:02.000000Z"},{"id":87,"external_id":"blackrock-usd-institutional-digital-liquidity-fund","name":"BlackRock USD Institutional Digital Liquidity Fund","symbol":"BUIDL","asset_class":"crypto","price":1,"price_change_24h":0,"price_change_pct_24h":0,"high_24h":1,"low_24h":1,"volume_24h":0,"market_cap":2636342225,"logo_url":"https:\/\/coin-images.coingecko.com\/coins\/images\/36291\/large\/blackrock.png?1711013223","data_source":"coingecko","is_active":true,"created_at":"2026-07-09T09:05:33.000000Z","updated_at":"2026-07-27T23:05:04.000000Z"},{"id":89,"external_id":"blockchain-capital","name":"Blockchain Capital","symbol":"BCAP","asset_class":"crypto","price":106.6299999999999954525264911353588104248046875,"price_change_24h":0,"price_change_pct_24h":0,"high_24h":106.6299999999999954525264911353588104248046875,"low_24h":106.6299999999999954525264911353588104248046875,"volume_24h":0,"market_cap":971624183,"logo_url":"https:\/\/coin-images.coingecko.com\/coins\/images\/56040\/large\/bcap_logo_200.png?1748088291","data_source":"coingecko","is_active":true,"created_at":"2026-07-09T09:05:33.000000Z","updated_at":"2026-07-09T09:05:33.000000Z"},{"id":4,"external_id":"binancecoin","name":"BNB","symbol":"BNB","asset_class":"crypto","price":567.5399999999999636202119290828704833984375,"price_change_24h":-5.57704963000000031314584703068248927593231201171875,"price_change_pct_24h":0.6999999999999999555910790149937383830547332763671875,"high_24h":575.3700000000000045474735088646411895751953125,"low_24h":562.279999999999972715158946812152862548828125,"volume_24h":550852280,"market_cap":75585347880,"logo_url":"https:\/\/coin-images.coingecko.com\/coins\/images\/825\/large\/bnb-icon2_2x.png?1696501970","data_source":"coingecko","is_active":true,"created_at":"2026-03-11T17:40:37.000000Z","updated_at":"2026-07-28T17:50:04.000000Z"},{"id":68,"external_id":"canton-network","name":"Canton","symbol":"CC","asset_class":"crypto","price":0.11743099999999999372146675113981473259627819061279296875,"price_change_24h":-0.0028895000000000001412481243079355408553965389728546142578125,"price_change_pct_24h":-2.79999999999999982236431605997495353221893310546875,"high_24h":0.1223390000000000032986946507662651129066944122314453125,"low_24h":0.11680699999999999416644413940957747399806976318359375,"volume_24h":7630443,"market_cap":4598668225,"logo_url":"https:\/\/coin-images.coingecko.com\/coins\/images\/70468\/large\/Canton-Ticker_%281%29.png?1762826299","data_source":"coingecko","is_active":true,"created_at":"2026-03-11T17:51:47.000000Z","updated_at":"2026-07-28T17:50:04.000000Z"},{"id":8,"external_id":"cardano","name":"Cardano","symbol":"ADA","asset_class":"crypto","price":0.1585729999999999917381643399494350887835025787353515625,"price_change_24h":0.00047904000000000002135180920959101058542728424072265625,"price_change_pct_24h":1,"high_24h":0.1594959999999999988862242616960429586470127105712890625,"low_24h":0.15347399999999999931077354631270281970500946044921875,"volume_24h":314076755,"market_cap":5911239855,"logo_url":"https:\/\/coin-images.coingecko.com\/coins\/images\/975\/large\/cardano.png?1696502090","data_source":"coingecko","is_active":true,"created_at":"2026-03-11T17:40:37.000000Z","updated_at":"2026-07-28T17:50:04.000000Z"},{"id":12,"external_id":"chainlink","name":"Chainlink","symbol":"LINK","asset_class":"crypto","price":8.32000000000000028421709430404007434844970703125,"price_change_24h":-0.2433481500000000130601307546385214664041996002197265625,"price_change_pct_24h":-1.8000000000000000444089209850062616169452667236328125,"high_24h":8.6500000000000003552713678800500929355621337890625,"low_24h":8.199999999999999289457264239899814128875732421875,"volume_24h":213896182,"market_cap":6221652985,"logo_url":"https:\/\/coin-images.coingecko.com\/coins\/images\/877\/large\/Chainlink_Logo_500.png?1760023405","data_source":"coingecko","is_active":true,"created_at":"2026-03-11T17:40:37.000000Z","updated_at":"2026-07-28T17:50:04.000000Z"},{"id":85,"external_id":"hashnote-usyc","name":"Circle USYC","symbol":"USYC","asset_class":"crypto","price":1.12999999999999989341858963598497211933135986328125,"price_change_24h":null,"price_change_pct_24h":0,"high_24h":0,"low_24h":0,"volume_24h":1207.55999999999994543031789362430572509765625,"market_cap":2955639885,"logo_url":"https:\/\/coin-images.coingecko.com\/coins\/images\/51054\/large\/Hashnote_SDYC_200x200.png?1730370965","data_source":"coingecko","is_active":true,"created_at":"2026-07-08T11:34:04.000000Z","updated_at":"2026-07-28T17:30:05.000000Z"},{"id":79,"external_id":"crypto-com-chain","name":"Cronos","symbol":"CRO","asset_class":"crypto","price":0.055803999999999999437338971119970665313303470611572265625,"price_change_24h":-0.000653119999999999980948295341676157477195374667644500732421875,"price_change_pct_24h":-1.156800000000000050448534238967113196849822998046875,"high_24h":0.05649200000000000054800608495497726835310459136962890625,"low_24h":0.054789999999999998425703751081528025679290294647216796875,"volume_24h":8145198,"market_cap":2638668673,"logo_url":"https:\/\/coin-images.coingecko.com\/coins\/images\/7310\/large\/cro_token_logo.png?1696507599","data_source":"coingecko","is_active":true,"created_at":"2026-03-11T17:51:47.000000Z","updated_at":"2026-07-28T17:25:05.000000Z"},{"id":72,"external_id":"dai","name":"Dai","symbol":"DAI","asset_class":"crypto","price":0.99997100000000005426414872999885119497776031494140625,"price_change_24h":-0.000111689999999999996205778118874007986960350535809993743896484375,"price_change_pct_24h":0,"high_24h":1,"low_24h":0.9997979999999999645154957761405967175960540771484375,"volume_24h":239938571,"market_cap":4602410070,"logo_url":"https:\/\/coin-images.coingecko.com\/coins\/images\/9956\/large\/Badge_Dai.png?1696509996","data_source":"coingecko","is_active":true,"created_at":"2026-03-11T17:51:47.000000Z","updated_at":"2026-07-28T17:50:04.000000Z"},{"id":9,"external_id":"dogecoin","name":"Dogecoin","symbol":"DOGE","asset_class":"crypto","price":0.07051200000000000522870635677463724277913570404052734375,"price_change_24h":-0.00108475999999999993435306766542680634302087128162384033203125,"price_change_pct_24h":0,"high_24h":0.07210199999999999942446038403431884944438934326171875,"low_24h":0.0692959999999999964881425285057048313319683074951171875,"volume_24h":540493026,"market_cap":10948350103,"logo_url":"https:\/\/coin-images.coingecko.com\/coins\/images\/5\/large\/dogecoin.png?1696501409","data_source":"coingecko","is_active":true,"created_at":"2026-03-11T17:40:37.000000Z","updated_at":"2026-07-28T17:50:04.000000Z"},{"id":102,"external_id":"edgex","name":"edgeX","symbol":"EDGE","asset_class":"crypto","price":0.492559000000000024588331370978266932070255279541015625,"price_change_24h":0.00867358000000000017859491663330118171870708465576171875,"price_change_pct_24h":1.792499999999999982236431605997495353221893310546875,"high_24h":0.55903899999999995262811580687412060797214508056640625,"low_24h":0.3788650000000000073185901783290319144725799560546875,"volume_24h":80731450,"market_cap":170285890,"logo_url":"https:\/\/coin-images.coingecko.com\/coins\/images\/102172616\/large\/edgex.png?1774332310","data_source":"coingecko","is_active":true,"created_at":"2026-07-09T09:05:33.000000Z","updated_at":"2026-07-09T09:05:33.000000Z"},{"id":67,"external_id":"ethena-usde","name":"Ethena USDe","symbol":"USDE","asset_class":"crypto","price":0.999476000000000031064928407431580126285552978515625,"price_change_24h":0.000118389999999999996431986060141383632071665488183498382568359375,"price_change_pct_24h":0,"high_24h":0.9995760000000000200515160031500272452831268310546875,"low_24h":0.99927200000000004909139761366532184183597564697265625,"volume_24h":39603398,"market_cap":3879953165,"logo_url":"https:\/\/coin-images.coingecko.com\/coins\/images\/33613\/large\/usde.png?1733810059","data_source":"coingecko","is_active":true,"created_at":"2026-03-11T17:51:47.000000Z","updated_at":"2026-07-28T17:50:04.000000Z"},{"id":2,"external_id":"ethereum","name":"Ethereum","symbol":"ETH","asset_class":"crypto","price":1897.59999999999990905052982270717620849609375,"price_change_24h":-33.68039850000000257068677456118166446685791015625,"price_change_pct_24h":0,"high_24h":1951.98000000000001818989403545856475830078125,"low_24h":1860.94000000000005456968210637569427490234375,"volume_24h":11271039364,"market_cap":228908221730,"logo_url":"https:\/\/coin-images.coingecko.com\/coins\/images\/279\/large\/ethereum.png?1696501628","data_source":"coingecko","is_active":true,"created_at":"2026-03-11T17:40:37.000000Z","updated_at":"2026-07-28T17:50:04.000000Z"},{"id":60,"external_id":"figure-heloc","name":"Figure Heloc","symbol":"FIGR_HELOC","asset_class":"crypto","price":1.024999999999999911182158029987476766109466552734375,"price_change_24h":0.0223838500000000002743139049243836780078709125518798828125,"price_change_pct_24h":2.5,"high_24h":1.040999999999999925393012745189480483531951904296875,"low_24h":1.0020000000000000017763568394002504646778106689453125,"volume_24h":79997989,"market_cap":21079975394,"logo_url":"https:\/\/coin-images.coingecko.com\/coins\/images\/68480\/large\/figure.png?1755863954","data_source":"coingecko","is_active":true,"created_at":"2026-03-11T17:51:47.000000Z","updated_at":"2026-07-28T17:50:04.000000Z"},{"id":111,"external_id":"genius-3","name":"Genius","symbol":"GENIUS","asset_class":"crypto","price":0.350248999999999977017495211839559487998485565185546875,"price_change_24h":-0.013964310000000000611120043458868167363107204437255859375,"price_change_pct_24h":-3.834099999999999841548969925497658550739288330078125,"high_24h":0.366007000000000026762592142404173500835895538330078125,"low_24h":0.35048299999999998899369302307604812085628509521484375,"volume_24h":11701811,"market_cap":117465504,"logo_url":"https:\/\/coin-images.coingecko.com\/coins\/images\/71660\/large\/genius.png?1768804210","data_source":"coingecko","is_active":true,"created_at":"2026-07-09T09:05:33.000000Z","updated_at":"2026-07-09T09:05:33.000000Z"},{"id":84,"external_id":"global-dollar","name":"Global Dollar","symbol":"USDG","asset_class":"crypto","price":0.999643999999999977035258780233561992645263671875,"price_change_24h":0.000251880000000000007533140777837843415909446775913238525390625,"price_change_pct_24h":-0.1000000000000000055511151231257827021181583404541015625,"high_24h":1.004000000000000003552713678800500929355621337890625,"low_24h":0.99770199999999997775290694335126318037509918212890625,"volume_24h":543276077,"market_cap":3312351757,"logo_url":"https:\/\/coin-images.coingecko.com\/coins\/images\/51281\/large\/GDN_USDG_Token_200x200.png?1730484111","data_source":"coingecko","is_active":true,"created_at":"2026-07-08T11:34:04.000000Z","updated_at":"2026-07-28T17:50:04.000000Z"},{"id":78,"external_id":"the-open-network","name":"Gram (prev. Toncoin)","symbol":"GRAM","asset_class":"crypto","price":1.4499999999999999555910790149937383830547332763671875,"price_change_24h":-0.0227548599999999982823606359261248144321143627166748046875,"price_change_pct_24h":-0.90000000000000002220446049250313080847263336181640625,"high_24h":1.4899999999999999911182158029987476766109466552734375,"low_24h":1.4299999999999999378275106209912337362766265869140625,"volume_24h":32665492,"market_cap":3978806612,"logo_url":"https:\/\/coin-images.coingecko.com\/coins\/images\/17980\/large\/Gram_Circular_Badge.png?1781524778","data_source":"coingecko","is_active":true,"created_at":"2026-03-11T17:51:47.000000Z","updated_at":"2026-07-28T17:50:04.000000Z"},{"id":73,"external_id":"hedera-hashgraph","name":"Hedera","symbol":"HBAR","asset_class":"crypto","price":0.06805799999999999350119850305418367497622966766357421875,"price_change_24h":-0.000657609999999999987087273556340960567467845976352691650390625,"price_change_pct_24h":1.1999999999999999555910790149937383830547332763671875,"high_24h":0.068996000000000001772804125721449963748455047607421875,"low_24h":0.06711799999999999710720288703669211827218532562255859375,"volume_24h":48423779,"market_cap":2982097134,"logo_url":"https:\/\/coin-images.coingecko.com\/coins\/images\/3688\/large\/hbar.png?1696504364","data_source":"coingecko","is_active":true,"created_at":"2026-03-11T17:51:47.000000Z","updated_at":"2026-07-28T17:50:04.000000Z"},{"id":64,"external_id":"hyperliquid","name":"Hyperliquid","symbol":"HYPE","asset_class":"crypto","price":55.22999999999999687361196265555918216705322265625,"price_change_24h":-1.298432809999999992811581250862218439579010009765625,"price_change_pct_24h":-2.79999999999999982236431605997495353221893310546875,"high_24h":57.22999999999999687361196265555918216705322265625,"low_24h":54,"volume_24h":491798437,"market_cap":12293389312,"logo_url":"https:\/\/coin-images.coingecko.com\/coins\/images\/50882\/large\/hyperliquid.jpg?1729431300","data_source":"coingecko","is_active":true,"created_at":"2026-03-11T17:51:47.000000Z","updated_at":"2026-07-28T17:50:04.000000Z"},{"id":92,"external_id":"superstate-short-duration-us-government-securities-fund-ustb","name":"Invesco Short Duration US Government Securities Fund","symbol":"USTB","asset_class":"crypto","price":11.1400000000000005684341886080801486968994140625,"price_change_24h":0.00104100000000000004161948563563555580913089215755462646484375,"price_change_pct_24h":0.00940000000000000036914915568786454969085752964019775390625,"high_24h":11.1400000000000005684341886080801486968994140625,"low_24h":11.1400000000000005684341886080801486968994140625,"volume_24h":0,"market_cap":821439020,"logo_url":"https:\/\/coin-images.coingecko.com\/coins\/images\/35012\/large\/Invesco_icon_lg.png?1780816895","data_source":"coingecko","is_active":true,"created_at":"2026-07-09T09:05:33.000000Z","updated_at":"2026-07-09T09:05:33.000000Z"},{"id":94,"external_id":"janus-henderson-anemoy-aaa-clo-fund","name":"Janus Henderson Anemoy AAA CLO Fund","symbol":"JAAA","asset_class":"crypto","price":1.04000000000000003552713678800500929355621337890625,"price_change_24h":0.0002480000000000000108003883614316009698086418211460113525390625,"price_change_pct_24h":0.02380000000000000170974345792274107225239276885986328125,"high_24h":1.04000000000000003552713678800500929355621337890625,"low_24h":1.04000000000000003552713678800500929355621337890625,"volume_24h":0,"market_cap":683937569,"logo_url":"https:\/\/coin-images.coingecko.com\/coins\/images\/70446\/large\/jaaa.png?1762078666","data_source":"coingecko","is_active":true,"created_at":"2026-07-09T09:05:33.000000Z","updated_at":"2026-07-09T09:05:33.000000Z"},{"id":90,"external_id":"janus-henderson-anemoy-treasury-fund","name":"Janus Henderson Anemoy Treasury Fund","symbol":"JTRSY","asset_class":"crypto","price":1.1100000000000000976996261670137755572795867919921875,"price_change_24h":9.500000000000000523019128007007338965195231139659881591796875e-5,"price_change_pct_24h":0.0086000000000000000055511151231257827021181583404541015625,"high_24h":1.1100000000000000976996261670137755572795867919921875,"low_24h":1.1100000000000000976996261670137755572795867919921875,"volume_24h":0,"market_cap":870951028,"logo_url":"https:\/\/coin-images.coingecko.com\/coins\/images\/70445\/large\/JTRSY.png?1762078582","data_source":"coingecko","is_active":true,"created_at":"2026-07-09T09:05:33.000000Z","updated_at":"2026-07-09T09:05:33.000000Z"},{"id":65,"external_id":"leo-token","name":"LEO Token","symbol":"LEO","asset_class":"crypto","price":9.75,"price_change_24h":0.00981182000000000061057381373075259034521877765655517578125,"price_change_pct_24h":0.8000000000000000444089209850062616169452667236328125,"high_24h":9.8499999999999996447286321199499070644378662109375,"low_24h":9.6699999999999999289457264239899814128875732421875,"volume_24h":195233,"market_cap":8972914556,"logo_url":"https:\/\/coin-images.coingecko.com\/coins\/images\/8418\/large\/leo-token.png?1696508607","data_source":"coingecko","is_active":true,"created_at":"2026-03-11T17:51:47.000000Z","updated_at":"2026-07-28T17:50:04.000000Z"},{"id":109,"external_id":"lido-earn-eth","name":"Lido Earn ETH","symbol":"EARNETH","asset_class":"crypto","price":1772.40000000000009094947017729282379150390625,"price_change_24h":18.010000000000001563194018672220408916473388671875,"price_change_pct_24h":1.0267999999999999349853396779508329927921295166015625,"high_24h":1775.839999999999918145476840436458587646484375,"low_24h":1736.84999999999990905052982270717620849609375,"volume_24h":9671.5,"market_cap":126489637,"logo_url":"https:\/\/coin-images.coingecko.com\/coins\/images\/102172835\/large\/earnETH.png?1776152041","data_source":"coingecko","is_active":true,"created_at":"2026-07-09T09:05:33.000000Z","updated_at":"2026-07-09T09:05:33.000000Z"},{"id":15,"external_id":"litecoin","name":"Litecoin","symbol":"LTC","asset_class":"crypto","price":46.25,"price_change_24h":-0.05110267000000000281456635775612085126340389251708984375,"price_change_pct_24h":0.5,"high_24h":46.75,"low_24h":45.86999999999999744204615126363933086395263671875,"volume_24h":198533858,"market_cap":3580670975,"logo_url":"https:\/\/coin-images.coingecko.com\/coins\/images\/2\/large\/litecoin.png?1696501400","data_source":"coingecko","is_active":true,"created_at":"2026-03-11T17:40:37.000000Z","updated_at":"2026-07-28T17:50:04.000000Z"},{"id":121,"external_id":"manadia","name":"Manadia","symbol":"UMXM","asset_class":"crypto","price":2.060000000000000053290705182007513940334320068359375,"price_change_24h":-0.1495548700000000064136429500649683177471160888671875,"price_change_pct_24h":-6.768299999999999982946974341757595539093017578125,"high_24h":2.20999999999999996447286321199499070644378662109375,"low_24h":1.95999999999999996447286321199499070644378662109375,"volume_24h":13445808,"market_cap":96794080,"logo_url":"https:\/\/coin-images.coingecko.com\/coins\/images\/102172975\/large\/manadia-1_%282%29.png?1776925950","data_source":"coingecko","is_active":true,"created_at":"2026-07-09T09:05:33.000000Z","updated_at":"2026-07-09T09:05:33.000000Z"},{"id":82,"external_id":"memecore","name":"MemeCore","symbol":"M","asset_class":"crypto","price":1.1799999999999999378275106209912337362766265869140625,"price_change_24h":-0.22220530999999998922334043527371250092983245849609375,"price_change_pct_24h":-15.827899999999999636202119290828704833984375,"high_24h":1.4099999999999999200639422269887290894985198974609375,"low_24h":1.149999999999999911182158029987476766109466552734375,"volume_24h":14190064,"market_cap":1562050342,"logo_url":"https:\/\/coin-images.coingecko.com\/coins\/images\/53247\/large\/square-bg-transparent.png?1752637478","data_source":"coingecko","is_active":true,"created_at":"2026-04-07T13:43:38.000000Z","updated_at":"2026-07-09T09:20:05.000000Z"},{"id":66,"external_id":"monero","name":"Monero","symbol":"XMR","asset_class":"crypto","price":335.93999999999999772626324556767940521240234375,"price_change_24h":-11.2283410499999991571939972345717251300811767578125,"price_change_pct_24h":-1.899999999999999911182158029987476766109466552734375,"high_24h":350.3700000000000045474735088646411895751953125,"low_24h":334.18999999999999772626324556767940521240234375,"volume_24h":68324996,"market_cap":6300669627,"logo_url":"https:\/\/coin-images.coingecko.com\/coins\/images\/69\/large\/monero_logo.png?1696501460","data_source":"coingecko","is_active":true,"created_at":"2026-03-11T17:51:47.000000Z","updated_at":"2026-07-28T17:50:04.000000Z"},{"id":126,"external_id":"morpho","name":"Morpho","symbol":"MORPHO","asset_class":"crypto","price":2.04999999999999982236431605997495353221893310546875,"price_change_24h":-0.040468579999999997054427325338110676966607570648193359375,"price_change_pct_24h":-1.9337999999999999634070491083548404276371002197265625,"high_24h":2.140000000000000124344978758017532527446746826171875,"low_24h":2.020000000000000017763568394002504646778106689453125,"volume_24h":1361662,"market_cap":1341670149,"logo_url":"https:\/\/coin-images.coingecko.com\/coins\/images\/29837\/large\/Morpho-token-icon.png?1726771230","data_source":"coingecko","is_active":true,"created_at":"2026-07-09T09:15:05.000000Z","updated_at":"2026-07-09T09:20:05.000000Z"},{"id":122,"external_id":"near","name":"NEAR Protocol","symbol":"NEAR","asset_class":"crypto","price":1.9499999999999999555910790149937383830547332763671875,"price_change_24h":-0.031997169999999998390993738439647131599485874176025390625,"price_change_pct_24h":-1.6146000000000000351718654201249592006206512451171875,"high_24h":2.060000000000000053290705182007513940334320068359375,"low_24h":1.9499999999999999555910790149937383830547332763671875,"volume_24h":196515090,"market_cap":2537639192,"logo_url":"https:\/\/coin-images.coingecko.com\/coins\/images\/10365\/large\/near.jpg?1696510367","data_source":"coingecko","is_active":true,"created_at":"2026-07-09T09:15:05.000000Z","updated_at":"2026-07-21T16:20:32.000000Z"},{"id":99,"external_id":"nexus-4","name":"Nexus","symbol":"NEX","asset_class":"crypto","price":3.360000000000000017360245185837896997327334247529506683349609375e-6,"price_change_24h":7.29999999999999998729857154933231555560269043780863285064697265625e-7,"price_change_pct_24h":27.965199999999999391775418189354240894317626953125,"high_24h":3.75000000000000009500321536404232602990305167622864246368408203125e-6,"low_24h":2.60000000000000009410332756087935734967686585150659084320068359375e-6,"volume_24h":5678519,"market_cap":202479888,"logo_url":"https:\/\/coin-images.coingecko.com\/coins\/images\/102173233\/large\/nexus.jpg?1778490588","data_source":"coingecko","is_active":true,"created_at":"2026-07-09T09:05:33.000000Z","updated_at":"2026-07-09T09:05:33.000000Z"},{"id":124,"external_id":"ondo-finance","name":"Ondo","symbol":"ONDO","asset_class":"crypto","price":0.319182000000000021255885940263397060334682464599609375,"price_change_24h":0.0029102899999999998388588995368309042532928287982940673828125,"price_change_pct_24h":0.92020000000000001794120407794252969324588775634765625,"high_24h":0.31961099999999997844923882439616136252880096435546875,"low_24h":0.3095149999999999845812226340058259665966033935546875,"volume_24h":55164954,"market_cap":1554200609,"logo_url":"https:\/\/coin-images.coingecko.com\/coins\/images\/26580\/large\/ONDO.png?1696525656","data_source":"coingecko","is_active":true,"created_at":"2026-07-09T09:15:05.000000Z","updated_at":"2026-07-09T09:20:05.000000Z"},{"id":95,"external_id":"ousg","name":"Ondo Short-Term U.S. Government Bond Fund","symbol":"OUSG","asset_class":"crypto","price":115.8299999999999982946974341757595539093017578125,"price_change_24h":0.0105079999999999999793498517419720883481204509735107421875,"price_change_pct_24h":0.0091000000000000004496403249731883988715708255767822265625,"high_24h":115.8299999999999982946974341757595539093017578125,"low_24h":115.81999999999999317878973670303821563720703125,"volume_24h":0,"market_cap":402706438,"logo_url":"https:\/\/coin-images.coingecko.com\/coins\/images\/29023\/large\/OUSG.png?1696527993","data_source":"coingecko","is_active":true,"created_at":"2026-07-09T09:05:33.000000Z","updated_at":"2026-07-09T09:05:33.000000Z"},{"id":74,"external_id":"paypal-usd","name":"PayPal USD","symbol":"PYUSD","asset_class":"crypto","price":0.99994700000000003026201511602266691625118255615234375,"price_change_24h":0.0005491400000000000447553105686893104575574398040771484375,"price_change_pct_24h":0.1000000000000000055511151231257827021181583404541015625,"high_24h":0.9999759999999999759978663860238157212734222412109375,"low_24h":0.9993469999999999853201870791963301599025726318359375,"volume_24h":158933010,"market_cap":2704888821,"logo_url":"https:\/\/coin-images.coingecko.com\/coins\/images\/31212\/large\/PYUSD_Token_Logo_2x.png?1765987788","data_source":"coingecko","is_active":true,"created_at":"2026-03-11T17:51:47.000000Z","updated_at":"2026-07-28T17:50:04.000000Z"},{"id":97,"external_id":"peanut-2-2","name":"Peanut","symbol":"PEANUT","asset_class":"crypto","price":0.000736070000000000018540446955483957935939542949199676513671875,"price_change_24h":null,"price_change_pct_24h":null,"high_24h":null,"low_24h":null,"volume_24h":0,"market_cap":228181317,"logo_url":"https:\/\/coin-images.coingecko.com\/coins\/images\/102172338\/large\/photo_2024-11-02_22-15-38.jpg?1772958557","data_source":"coingecko","is_active":true,"created_at":"2026-07-09T09:05:33.000000Z","updated_at":"2026-07-09T09:05:33.000000Z"},{"id":112,"external_id":"pearl-2","name":"Pearl","symbol":"PRL","asset_class":"crypto","price":0.479559000000000013042011914876638911664485931396484375,"price_change_24h":0.0101313500000000007716938199564538081176578998565673828125,"price_change_pct_24h":2.15819999999999989626076057902537286281585693359375,"high_24h":0.499956000000000011507239605634822510182857513427734375,"low_24h":0.469341999999999981429965600909781642258167266845703125,"volume_24h":665232,"market_cap":115391536,"logo_url":"https:\/\/coin-images.coingecko.com\/coins\/images\/102173580\/large\/pearl.png?1780324634","data_source":"coingecko","is_active":true,"created_at":"2026-07-09T09:05:33.000000Z","updated_at":"2026-07-09T09:05:33.000000Z"},{"id":11,"external_id":"polkadot","name":"Polkadot","symbol":"DOT","asset_class":"crypto","price":0.8328510000000000079722894952283240854740142822265625,"price_change_24h":0.0072528799999999997438759891110748867504298686981201171875,"price_change_pct_24h":0.87849999999999994759747323769261129200458526611328125,"high_24h":0.83692500000000003002043058586423285305500030517578125,"low_24h":0.81706800000000001649169689699192531406879425048828125,"volume_24h":79864799,"market_cap":1409552807,"logo_url":"https:\/\/coin-images.coingecko.com\/coins\/images\/12171\/large\/polkadot.jpg?1766533446","data_source":"coingecko","is_active":true,"created_at":"2026-03-11T17:40:37.000000Z","updated_at":"2026-07-09T09:20:05.000000Z"},{"id":14,"external_id":"matic-network","name":"Polygon","symbol":"MATIC","asset_class":"crypto","price":0,"price_change_24h":null,"price_change_pct_24h":null,"high_24h":null,"low_24h":null,"volume_24h":null,"market_cap":null,"logo_url":"https:\/\/assets.coingecko.com\/coins\/images\/4713\/large\/polygon.png","data_source":"coingecko","is_active":true,"created_at":"2026-03-11T17:40:37.000000Z","updated_at":"2026-03-11T17:40:37.000000Z"},{"id":71,"external_id":"rain","name":"Rain","symbol":"RAIN","asset_class":"crypto","price":0.01374503000000000009495071395804188796319067478179931640625,"price_change_24h":0.000112689999999999993407669152123418143673916347324848175048828125,"price_change_pct_24h":1,"high_24h":0.01394981999999999992823074279613138060085475444793701171875,"low_24h":0.01351165000000000004920508445138693787157535552978515625,"volume_24h":24329274,"market_cap":9545709723,"logo_url":"https:\/\/coin-images.coingecko.com\/coins\/images\/69134\/large\/Rain_logo_1_.png?1762952191","data_source":"coingecko","is_active":true,"created_at":"2026-03-11T17:51:47.000000Z","updated_at":"2026-07-28T17:50:04.000000Z"},{"id":123,"external_id":"ripple-usd","name":"Ripple USD","symbol":"RLUSD","asset_class":"crypto","price":0.9998270000000000212736495086573995649814605712890625,"price_change_24h":0.00014641999999999999741880085668555011579883284866809844970703125,"price_change_pct_24h":0.01469999999999999952537965697274557896889746189117431640625,"high_24h":1,"low_24h":0.99951699999999998880184648442082107067108154296875,"volume_24h":94249712,"market_cap":1566954082,"logo_url":"https:\/\/coin-images.coingecko.com\/coins\/images\/39651\/large\/RLUSD_200x200_%281%29.png?1727376633","data_source":"coingecko","is_active":true,"created_at":"2026-07-09T09:15:05.000000Z","updated_at":"2026-07-09T09:20:05.000000Z"},{"id":118,"external_id":"saturn-dollar","name":"Saturn Dollar","symbol":"USDAT","asset_class":"crypto","price":0.9998359999999999470077227670117281377315521240234375,"price_change_24h":-6.6820000000000000597334681717853754889802075922489166259765625e-5,"price_change_pct_24h":-0.006700000000000000226207941267375645111314952373504638671875,"high_24h":1,"low_24h":0.99920299999999995232968785785487852990627288818359375,"volume_24h":970203,"market_cap":102449667,"logo_url":"https:\/\/coin-images.coingecko.com\/coins\/images\/102172645\/large\/usdat.png?1774503009","data_source":"coingecko","is_active":true,"created_at":"2026-07-09T09:05:33.000000Z","updated_at":"2026-07-09T09:05:33.000000Z"},{"id":117,"external_id":"securitize-tokenized-aaa-clo-fund","name":"Securitize Tokenized AAA CLO Fund","symbol":"STAC","asset_class":"crypto","price":1022.98000000000001818989403545856475830078125,"price_change_24h":0.153610999999999997545074847948853857815265655517578125,"price_change_pct_24h":0.01499999999999999944488848768742172978818416595458984375,"high_24h":1023.509999999999990905052982270717620849609375,"low_24h":1022.25,"volume_24h":0,"market_cap":102499950,"logo_url":"https:\/\/coin-images.coingecko.com\/coins\/images\/71167\/large\/stac_logo.png?1766163743","data_source":"coingecko","is_active":true,"created_at":"2026-07-09T09:05:33.000000Z","updated_at":"2026-07-09T09:05:33.000000Z"},{"id":77,"external_id":"shiba-inu","name":"Shiba Inu","symbol":"SHIB","asset_class":"crypto","price":4.609999999999999907855825764801949162574601359665393829345703125e-6,"price_change_24h":-3.9999999999999998189924473035450347424557548947632312774658203125e-7,"price_change_pct_24h":-6.0999999999999996447286321199499070644378662109375,"high_24h":5.0599999999999998345529168830569943793307174928486347198486328125e-6,"low_24h":4.570000000000000290830727556201651395895169116556644439697265625e-6,"volume_24h":149184853,"market_cap":2713223909,"logo_url":"https:\/\/coin-images.coingecko.com\/coins\/images\/11939\/large\/shiba.png?1696511800","data_source":"coingecko","is_active":true,"created_at":"2026-03-11T17:51:47.000000Z","updated_at":"2026-07-28T17:50:04.000000Z"},{"id":5,"external_id":"solana","name":"Solana","symbol":"SOL","asset_class":"crypto","price":73.6700000000000017053025658242404460906982421875,"price_change_24h":-1.632911379999999912371322352555580437183380126953125,"price_change_pct_24h":-1,"high_24h":76.0199999999999960209606797434389591217041015625,"low_24h":72.43000000000000682121026329696178436279296875,"volume_24h":1873729550,"market_cap":42947827283,"logo_url":"https:\/\/coin-images.coingecko.com\/coins\/images\/4128\/large\/solana.png?1718769756","data_source":"coingecko","is_active":true,"created_at":"2026-03-11T17:40:37.000000Z","updated_at":"2026-07-28T17:50:04.000000Z"},{"id":104,"external_id":"spark-usdc","name":"Spark USDC","symbol":"SUSDC","asset_class":"crypto","price":1.100000000000000088817841970012523233890533447265625,"price_change_24h":null,"price_change_pct_24h":null,"high_24h":null,"low_24h":null,"volume_24h":179.909999999999996589394868351519107818603515625,"market_cap":157209849,"logo_url":"https:\/\/coin-images.coingecko.com\/coins\/images\/102173690\/large\/spUSDC_%281%29.png?1781003574","data_source":"coingecko","is_active":true,"created_at":"2026-07-09T09:05:33.000000Z","updated_at":"2026-07-09T09:05:33.000000Z"},{"id":106,"external_id":"safo","name":"Spiko Amundi Overnight Swap Fund","symbol":"SAFO","asset_class":"crypto","price":1.0129999999999999005240169935859739780426025390625,"price_change_24h":0.000110000000000000003916138247017642015634919516742229461669921875,"price_change_pct_24h":0.010899999999999999966693309261245303787291049957275390625,"high_24h":1.0129999999999999005240169935859739780426025390625,"low_24h":1.0129999999999999005240169935859739780426025390625,"volume_24h":0,"market_cap":142324144,"logo_url":"https:\/\/coin-images.coingecko.com\/coins\/images\/102172590\/large\/Fund_usdSAFO.png?1774104804","data_source":"coingecko","is_active":true,"created_at":"2026-07-09T09:05:33.000000Z","updated_at":"2026-07-09T09:05:33.000000Z"},{"id":93,"external_id":"spiko-amundi-overnight-swap-fund-eur","name":"Spiko Amundi Overnight Swap Fund (EUR)","symbol":"EURSAFO","asset_class":"crypto","price":1.149999999999999911182158029987476766109466552734375,"price_change_24h":0.0026060100000000001839450813889698110870085656642913818359375,"price_change_pct_24h":0.22670000000000001261213355974177829921245574951171875,"high_24h":1.149999999999999911182158029987476766109466552734375,"low_24h":1.149999999999999911182158029987476766109466552734375,"volume_24h":0,"market_cap":741214036,"logo_url":"https:\/\/coin-images.coingecko.com\/coins\/images\/102172591\/large\/Fund_eurSAF0.png?1774104814","data_source":"coingecko","is_active":true,"created_at":"2026-07-09T09:05:33.000000Z","updated_at":"2026-07-09T09:05:33.000000Z"},{"id":88,"external_id":"eutbl","name":"Spiko EU T-Bills Money Market Fund","symbol":"EUTBL","asset_class":"crypto","price":1.20999999999999996447286321199499070644378662109375,"price_change_24h":0.004111090000000000403701516660248671541921794414520263671875,"price_change_pct_24h":0.342100000000000015187850976872141472995281219482421875,"high_24h":1.20999999999999996447286321199499070644378662109375,"low_24h":1.1999999999999999555910790149937383830547332763671875,"volume_24h":0,"market_cap":1010586375,"logo_url":"https:\/\/coin-images.coingecko.com\/coins\/images\/39657\/large\/EUTBL.png?1723517425","data_source":"coingecko","is_active":true,"created_at":"2026-07-09T09:05:33.000000Z","updated_at":"2026-07-09T09:05:33.000000Z"},{"id":101,"external_id":"spiko-us-t-bills-money-market-fund","name":"Spiko US T-Bills Money Market Fund","symbol":"USTBL","asset_class":"crypto","price":1.088999999999999968025576890795491635799407958984375,"price_change_24h":7.79999999999999985879350905548790251486934721469879150390625e-5,"price_change_pct_24h":0.00719999999999999980293541312903471407480537891387939453125,"high_24h":1.088999999999999968025576890795491635799407958984375,"low_24h":1.088999999999999968025576890795491635799407958984375,"volume_24h":49.9500000000000028421709430404007434844970703125,"market_cap":178301678,"logo_url":"https:\/\/coin-images.coingecko.com\/coins\/images\/39666\/large\/USTB.png?1723541269","data_source":"coingecko","is_active":true,"created_at":"2026-07-09T09:05:33.000000Z","updated_at":"2026-07-09T09:05:33.000000Z"},{"id":69,"external_id":"stellar","name":"Stellar","symbol":"XLM","asset_class":"crypto","price":0.17133399999999998630784148190286941826343536376953125,"price_change_24h":-0.004981900000000000043598458177029897342436015605926513671875,"price_change_pct_24h":-1.3000000000000000444089209850062616169452667236328125,"high_24h":0.1773649999999999948840923025272786617279052734375,"low_24h":0.1697249999999999869881861513931653462350368499755859375,"volume_24h":149106129,"market_cap":5860086518,"logo_url":"https:\/\/coin-images.coingecko.com\/coins\/images\/100\/large\/fmpFRHHQ_400x400.jpg?1735231350","data_source":"coingecko","is_active":true,"created_at":"2026-03-11T17:51:47.000000Z","updated_at":"2026-07-28T17:50:04.000000Z"},{"id":75,"external_id":"sui","name":"Sui","symbol":"SUI","asset_class":"crypto","price":0.6874860000000000415099066231050528585910797119140625,"price_change_24h":-0.0117942800000000007354383768642946961335837841033935546875,"price_change_pct_24h":-1,"high_24h":0.7041809999999999458708543897955678403377532958984375,"low_24h":0.67407300000000003326050546093028970062732696533203125,"volume_24h":215679630,"market_cap":2785239076,"logo_url":"https:\/\/coin-images.coingecko.com\/coins\/images\/26375\/large\/sui-ocean-square.png?1727791290","data_source":"coingecko","is_active":true,"created_at":"2026-03-11T17:51:47.000000Z","updated_at":"2026-07-28T17:50:04.000000Z"},{"id":3,"external_id":"tether","name":"Tether","symbol":"USDT","asset_class":"crypto","price":0.9991849999999999898392388786305673420429229736328125,"price_change_24h":0.00010945999999999999892190405414993392696487717330455780029296875,"price_change_pct_24h":0,"high_24h":0.99927500000000002433608869978343136608600616455078125,"low_24h":0.99899400000000004862243940806365571916103363037109375,"volume_24h":43547412597,"market_cap":183945171490,"logo_url":"https:\/\/coin-images.coingecko.com\/coins\/images\/325\/large\/Tether.png?1696501661","data_source":"coingecko","is_active":true,"created_at":"2026-03-11T17:40:37.000000Z","updated_at":"2026-07-28T17:50:04.000000Z"},{"id":80,"external_id":"tether-gold","name":"Tether Gold","symbol":"XAUT","asset_class":"crypto","price":4119.8199999999997089616954326629638671875,"price_change_24h":5.6699999999999999289457264239899814128875732421875,"price_change_pct_24h":-0.1000000000000000055511151231257827021181583404541015625,"high_24h":4155.1899999999995998223312199115753173828125,"low_24h":4100.1800000000002910383045673370361328125,"volume_24h":173415723,"market_cap":2524520200,"logo_url":"https:\/\/coin-images.coingecko.com\/coins\/images\/10481\/large\/logo.png?1774627372","data_source":"coingecko","is_active":true,"created_at":"2026-03-11T17:51:47.000000Z","updated_at":"2026-07-23T04:25:06.000000Z"},{"id":110,"external_id":"the-black-bull","name":"The Black Bull","symbol":"ANSEM","asset_class":"crypto","price":0.298045999999999977614351109878043644130229949951171875,"price_change_24h":0.0037411100000000001818134531816895105293951928615570068359375,"price_change_pct_24h":1.2712000000000001076472244676551781594753265380859375,"high_24h":0.318798999999999999044320020402665250003337860107421875,"low_24h":0.262274999999999980371256924627232365310192108154296875,"volume_24h":52414609,"market_cap":123884139,"logo_url":"https:\/\/coin-images.coingecko.com\/coins\/images\/102174035\/large\/IMG_9497.jpeg?1782005339","data_source":"coingecko","is_active":true,"created_at":"2026-07-09T09:05:33.000000Z","updated_at":"2026-07-09T09:05:33.000000Z"},{"id":103,"external_id":"tradable-apac-diversified-finance-provider-sstn","name":"Tradable APAC Diversified Finance Provider SSTN","symbol":"PC0000033","asset_class":"crypto","price":1,"price_change_24h":0,"price_change_pct_24h":0,"high_24h":1,"low_24h":1,"volume_24h":0,"market_cap":162500000,"logo_url":"https:\/\/coin-images.coingecko.com\/coins\/images\/66798\/large\/tradable.jpg?1750576460","data_source":"coingecko","is_active":true,"created_at":"2026-07-09T09:05:33.000000Z","updated_at":"2026-07-09T09:05:33.000000Z"},{"id":108,"external_id":"tradable-latam-fintech-sstn","name":"Tradable LatAm Fintech SSTN","symbol":"PC0000097","asset_class":"crypto","price":1,"price_change_24h":0,"price_change_pct_24h":0,"high_24h":1,"low_24h":1,"volume_24h":0,"market_cap":134000000,"logo_url":"https:\/\/coin-images.coingecko.com\/coins\/images\/66796\/large\/tradable.jpg?1750576421","data_source":"coingecko","is_active":true,"created_at":"2026-07-09T09:05:33.000000Z","updated_at":"2026-07-09T09:05:33.000000Z"},{"id":116,"external_id":"tradable-latam-middle-market-lender-sstl","name":"Tradable LatAm Middle-Market Lender SSTL","symbol":"PC0000085","asset_class":"crypto","price":1,"price_change_24h":0,"price_change_pct_24h":0,"high_24h":1,"low_24h":1,"volume_24h":0,"market_cap":106500000,"logo_url":"https:\/\/coin-images.coingecko.com\/coins\/images\/66877\/large\/tradable.jpg?1750921571","data_source":"coingecko","is_active":true,"created_at":"2026-07-09T09:05:33.000000Z","updated_at":"2026-07-09T09:05:33.000000Z"},{"id":98,"external_id":"tradable-na-rent-financing-platform-sstn","name":"Tradable NA Rent Financing Platform SSTN","symbol":"PC0000031","asset_class":"crypto","price":1,"price_change_24h":0,"price_change_pct_24h":0,"high_24h":1,"low_24h":1,"volume_24h":0,"market_cap":202500000,"logo_url":"https:\/\/coin-images.coingecko.com\/coins\/images\/66150\/large\/tradable.jpg?1748488921","data_source":"coingecko","is_active":true,"created_at":"2026-07-09T09:05:33.000000Z","updated_at":"2026-07-09T09:05:33.000000Z"},{"id":115,"external_id":"tradable-na-third-party-online-merchant-sstn","name":"Tradable NA Third Party Online Merchant SSTN","symbol":"PC0000015","asset_class":"crypto","price":1,"price_change_24h":0,"price_change_pct_24h":0,"high_24h":1,"low_24h":1,"volume_24h":0,"market_cap":110225974,"logo_url":"https:\/\/coin-images.coingecko.com\/coins\/images\/66880\/large\/tradable.jpg?1750921859","data_source":"coingecko","is_active":true,"created_at":"2026-07-09T09:05:33.000000Z","updated_at":"2026-07-09T09:05:33.000000Z"},{"id":114,"external_id":"tradable-singapore-fintech-ssl-2","name":"Tradable Singapore Fintech SSL","symbol":"PC0000023","asset_class":"crypto","price":1,"price_change_24h":0,"price_change_pct_24h":0,"high_24h":1,"low_24h":1,"volume_24h":0,"market_cap":114500000,"logo_url":"https:\/\/coin-images.coingecko.com\/coins\/images\/66954\/large\/tradable.jpg?1751254449","data_source":"coingecko","is_active":true,"created_at":"2026-07-09T09:05:33.000000Z","updated_at":"2026-07-09T09:05:33.000000Z"},{"id":119,"external_id":"tradable-singapore-fintech-ssl","name":"Tradable Singapore Fintech SSL","symbol":"PC0000077","asset_class":"crypto","price":1,"price_change_24h":0,"price_change_pct_24h":0,"high_24h":1,"low_24h":1,"volume_24h":0,"market_cap":100000000,"logo_url":"https:\/\/coin-images.coingecko.com\/coins\/images\/66878\/large\/tradable.jpg?1750921608","data_source":"coingecko","is_active":true,"created_at":"2026-07-09T09:05:33.000000Z","updated_at":"2026-07-09T09:05:33.000000Z"},{"id":10,"external_id":"tron","name":"TRON","symbol":"TRX","asset_class":"crypto","price":0.3242570000000000174367187355528585612773895263671875,"price_change_24h":-0.00351542000000000000314859249783694394864141941070556640625,"price_change_pct_24h":-1.3000000000000000444089209850062616169452667236328125,"high_24h":0.32839200000000001722355591482482850551605224609375,"low_24h":0.32325199999999998379252019731211476027965545654296875,"volume_24h":429646348,"market_cap":30766302781,"logo_url":"https:\/\/coin-images.coingecko.com\/coins\/images\/1094\/large\/photo_2026-04-13_09-59-16.png?1776048311","data_source":"coingecko","is_active":true,"created_at":"2026-03-11T17:40:37.000000Z","updated_at":"2026-07-28T17:50:04.000000Z"},{"id":120,"external_id":"unity-usd","name":"Unity USD","symbol":"UUSD","asset_class":"crypto","price":0.9995119999999999560458263658802025020122528076171875,"price_change_24h":4.00599999999999993095280148569514722112216986715793609619140625e-5,"price_change_pct_24h":0.0040000000000000000832667268468867405317723751068115234375,"high_24h":1.004000000000000003552713678800500929355621337890625,"low_24h":0.998021000000000046981085688457824289798736572265625,"volume_24h":488888,"market_cap":99934673,"logo_url":"https:\/\/coin-images.coingecko.com\/coins\/images\/102172413\/large\/UUSD.png?1773390929","data_source":"coingecko","is_active":true,"created_at":"2026-07-09T09:05:33.000000Z","updated_at":"2026-07-09T09:05:33.000000Z"},{"id":100,"external_id":"usa","name":"USAT","symbol":"USAT","asset_class":"crypto","price":0.99857600000000001916333758344990201294422149658203125,"price_change_24h":0.00018202999999999999020637575508629879550426267087459564208984375,"price_change_pct_24h":0.018200000000000000899280649946376797743141651153564453125,"high_24h":0.998960999999999987863930073217488825321197509765625,"low_24h":0.99801499999999998546940105370595119893550872802734375,"volume_24h":1282311,"market_cap":185220019,"logo_url":"https:\/\/coin-images.coingecko.com\/coins\/images\/71792\/large\/usat_logo_200x200.png?1769440161","data_source":"coingecko","is_active":true,"created_at":"2026-07-09T09:05:33.000000Z","updated_at":"2026-07-09T09:05:33.000000Z"},{"id":70,"external_id":"usd1-wlfi","name":"USD1","symbol":"USD1","asset_class":"crypto","price":0.99885900000000005238831590759218670427799224853515625,"price_change_24h":1.775000000000000115554267543505062576514319516718387603759765625e-5,"price_change_pct_24h":0,"high_24h":0.99906499999999998085087327126529999077320098876953125,"low_24h":0.998693999999999970640374158392660319805145263671875,"volume_24h":863334292,"market_cap":4085835391,"logo_url":"https:\/\/coin-images.coingecko.com\/coins\/images\/54977\/large\/USD1_1000x1000_transparent.png?1749297002","data_source":"coingecko","is_active":true,"created_at":"2026-03-11T17:51:47.000000Z","updated_at":"2026-07-28T17:50:04.000000Z"},{"id":7,"external_id":"usd-coin","name":"USDC","symbol":"USDC","asset_class":"crypto","price":0.99965000000000003854694341498543508350849151611328125,"price_change_24h":3.27000000000000020142741641304695576764061115682125091552734375e-5,"price_change_pct_24h":0,"high_24h":0.99975599999999997802291318294010125100612640380859375,"low_24h":0.9995249999999999968025576890795491635799407958984375,"volume_24h":12207453647,"market_cap":72496764957,"logo_url":"https:\/\/coin-images.coingecko.com\/coins\/images\/6319\/large\/USDC.png?1769615602","data_source":"coingecko","is_active":true,"created_at":"2026-03-11T17:40:37.000000Z","updated_at":"2026-07-28T17:50:04.000000Z"},{"id":125,"external_id":"usdd","name":"USDD","symbol":"USDD","asset_class":"crypto","price":0.9989209999999999478603740499238483607769012451171875,"price_change_24h":-0.0002401699999999999993703647671594580970122478902339935302734375,"price_change_pct_24h":-0.024000000000000000499600361081320443190634250640869140625,"high_24h":1.0020000000000000017763568394002504646778106689453125,"low_24h":0.9945969999999999533457639699918217957019805908203125,"volume_24h":926646,"market_cap":1495733943,"logo_url":"https:\/\/coin-images.coingecko.com\/coins\/images\/25380\/large\/UUSD.jpg?1696524513","data_source":"coingecko","is_active":true,"created_at":"2026-07-09T09:15:05.000000Z","updated_at":"2026-07-09T09:20:05.000000Z"},{"id":91,"external_id":"usdgo","name":"USDGO","symbol":"USDGO","asset_class":"crypto","price":1,"price_change_24h":0.00015484999999999999632793734605229474254883825778961181640625,"price_change_pct_24h":0.01549999999999999988897769753748434595763683319091796875,"high_24h":1,"low_24h":0.99953199999999997604760437752702273428440093994140625,"volume_24h":16031365,"market_cap":868284203,"logo_url":"https:\/\/coin-images.coingecko.com\/coins\/images\/102172077\/large\/USDGO_%287%29.png?1771437018","data_source":"coingecko","is_active":true,"created_at":"2026-07-09T09:05:33.000000Z","updated_at":"2026-07-09T09:05:33.000000Z"},{"id":62,"external_id":"usds","name":"USDS","symbol":"USDS","asset_class":"crypto","price":1,"price_change_24h":4.0339999999999996628703702317153556577977724373340606689453125e-5,"price_change_pct_24h":0,"high_24h":1,"low_24h":0.99990199999999995750243897418840788304805755615234375,"volume_24h":211398205,"market_cap":9978333057,"logo_url":"https:\/\/coin-images.coingecko.com\/coins\/images\/39926\/large\/usds.webp?1726666683","data_source":"coingecko","is_active":true,"created_at":"2026-03-11T17:51:47.000000Z","updated_at":"2026-07-28T17:50:04.000000Z"},{"id":61,"external_id":"whitebit","name":"WhiteBIT Coin","symbol":"WBT","asset_class":"crypto","price":55.719999999999998863131622783839702606201171875,"price_change_24h":-0.9706470499999999557161345364875160157680511474609375,"price_change_pct_24h":-0.6999999999999999555910790149937383830547332763671875,"high_24h":56.93999999999999772626324556767940521240234375,"low_24h":55,"volume_24h":80444830,"market_cap":16376685947,"logo_url":"https:\/\/coin-images.coingecko.com\/coins\/images\/27045\/large\/wbt_token.png?1696526096","data_source":"coingecko","is_active":true,"created_at":"2026-03-11T17:51:47.000000Z","updated_at":"2026-07-28T17:50:04.000000Z"},{"id":81,"external_id":"world-liberty-financial","name":"World Liberty Financial","symbol":"WLFI","asset_class":"crypto","price":0.0932800000000000018030021919912542216479778289794921875,"price_change_24h":-0.002913230000000000159687818523934765835292637348175048828125,"price_change_pct_24h":-3.02850000000000019184653865522705018520355224609375,"high_24h":0.09651800000000000656630305684302584268152713775634765625,"low_24h":0.08848599999999999521360649623602512292563915252685546875,"volume_24h":112126144,"market_cap":2965289600,"logo_url":"https:\/\/coin-images.coingecko.com\/coins\/images\/50767\/large\/wlfi.png?1756438915","data_source":"coingecko","is_active":true,"created_at":"2026-03-11T17:51:47.000000Z","updated_at":"2026-04-09T11:44:02.000000Z"},{"id":6,"external_id":"ripple","name":"XRP","symbol":"XRP","asset_class":"crypto","price":1.05600000000000004973799150320701301097869873046875,"price_change_24h":-0.02997191999999999911796777496419963426887989044189453125,"price_change_pct_24h":-1.899999999999999911182158029987476766109466552734375,"high_24h":1.0940000000000000834887714518117718398571014404296875,"low_24h":1.0460000000000000408562073062057606875896453857421875,"volume_24h":1328307713,"market_cap":66032480503,"logo_url":"https:\/\/coin-images.coingecko.com\/coins\/images\/44\/large\/xrp-symbol-white-128.png?1696501442","data_source":"coingecko","is_active":true,"created_at":"2026-03-11T17:40:37.000000Z","updated_at":"2026-07-28T17:50:04.000000Z"},{"id":76,"external_id":"zcash","name":"Zcash","symbol":"ZEC","asset_class":"crypto","price":464.220000000000027284841053187847137451171875,"price_change_24h":-18.14955198999999907982783042825758457183837890625,"price_change_pct_24h":-1.5,"high_24h":490.73000000000001818989403545856475830078125,"low_24h":458.18000000000000682121026329696178436279296875,"volume_24h":217124534,"market_cap":7790424743,"logo_url":"https:\/\/coin-images.coingecko.com\/coins\/images\/486\/large\/circle-zcash-color.png?1696501740","data_source":"coingecko","is_active":true,"created_at":"2026-03-11T17:51:47.000000Z","updated_at":"2026-07-28T17:50:04.000000Z"},{"id":19,"external_id":"AUD\/USD","name":"Australian Dollar \/ US Dollar","symbol":"AUD\/USD","asset_class":"forex","price":0.69930999999999998717470361953019164502620697021484375,"price_change_24h":0.0003299999999999999981958875849841206218115985393524169921875,"price_change_pct_24h":0.047199999999999998900879205621095024980604648590087890625,"high_24h":0.69952000000000003065991904804832302033901214599609375,"low_24h":0.69816000000000000280664380625239573419094085693359375,"volume_24h":null,"market_cap":null,"logo_url":"https:\/\/hatscripts.github.io\/circle-flags\/flags\/au.svg","data_source":"twelvedata","is_active":true,"created_at":"2026-03-11T17:40:37.000000Z","updated_at":"2026-07-28T01:35:05.000000Z"},{"id":25,"external_id":"GBP\/JPY","name":"British Pound \/ Japanese Yen","symbol":"GBP\/JPY","asset_class":"forex","price":217.72809000000000878571881912648677825927734375,"price_change_24h":0.1261400000000000021227464230832993052899837493896484375,"price_change_pct_24h":0.058000000000000002942091015256664832122623920440673828125,"high_24h":217.757959999999997080522007308900356292724609375,"low_24h":217.569760000000002264641807414591312408447265625,"volume_24h":null,"market_cap":null,"logo_url":"https:\/\/hatscripts.github.io\/circle-flags\/flags\/gb.svg","data_source":"twelvedata","is_active":true,"created_at":"2026-03-11T17:40:37.000000Z","updated_at":"2026-07-28T01:36:07.000000Z"},{"id":17,"external_id":"GBP\/USD","name":"British Pound \/ US Dollar","symbol":"GBP\/USD","asset_class":"forex","price":1.329499999999999904076730672386474907398223876953125,"price_change_24h":0.000609999999999999973666897634672068306826986372470855712890625,"price_change_pct_24h":0.045900000000000003297362383136714925058186054229736328125,"high_24h":1.3306599999999999539568307227455079555511474609375,"low_24h":1.32864000000000004320099833421409130096435546875,"volume_24h":null,"market_cap":null,"logo_url":"https:\/\/hatscripts.github.io\/circle-flags\/flags\/gb.svg","data_source":"twelvedata","is_active":true,"created_at":"2026-03-11T17:40:37.000000Z","updated_at":"2026-07-28T01:35:05.000000Z"},{"id":23,"external_id":"EUR\/GBP","name":"Euro \/ British Pound","symbol":"EUR\/GBP","asset_class":"forex","price":0.85563000000000000166977542903623543679714202880859375,"price_change_24h":0.0001700000000000000122124532708767219446599483489990234375,"price_change_pct_24h":0.0199000000000000010214051826551440171897411346435546875,"high_24h":0.8557900000000000506616970596951432526111602783203125,"low_24h":0.8546899999999999497646285817609168589115142822265625,"volume_24h":null,"market_cap":null,"logo_url":"https:\/\/hatscripts.github.io\/circle-flags\/flags\/eu.svg","data_source":"twelvedata","is_active":true,"created_at":"2026-03-11T17:40:37.000000Z","updated_at":"2026-07-28T01:35:05.000000Z"},{"id":24,"external_id":"EUR\/JPY","name":"Euro \/ Japanese Yen","symbol":"EUR\/JPY","asset_class":"forex","price":186.27015000000000100044417195022106170654296875,"price_change_24h":0.11583000000000000240252262528883875347673892974853515625,"price_change_pct_24h":0.062199999999999998345767693308516754768788814544677734375,"high_24h":186.3125400000000126965460367500782012939453125,"low_24h":186.043579999999991514414432458579540252685546875,"volume_24h":null,"market_cap":null,"logo_url":"https:\/\/hatscripts.github.io\/circle-flags\/flags\/eu.svg","data_source":"twelvedata","is_active":true,"created_at":"2026-03-11T17:40:37.000000Z","updated_at":"2026-07-28T01:36:07.000000Z"},{"id":16,"external_id":"EUR\/USD","name":"Euro \/ US Dollar","symbol":"EUR\/USD","asset_class":"forex","price":1.137469999999999981099563228781335055828094482421875,"price_change_24h":0.000659999999999999996391775169968241243623197078704833984375,"price_change_pct_24h":0.05809999999999999886757251488234032876789569854736328125,"high_24h":1.137750000000000039079850466805510222911834716796875,"low_24h":1.1367100000000001092104184863273985683917999267578125,"volume_24h":null,"market_cap":null,"logo_url":"https:\/\/hatscripts.github.io\/circle-flags\/flags\/eu.svg","data_source":"twelvedata","is_active":true,"created_at":"2026-03-11T17:40:37.000000Z","updated_at":"2026-07-28T01:35:05.000000Z"},{"id":26,"external_id":"XAU\/USD","name":"Gold Spot \/ US Dollar","symbol":"XAU\/USD","asset_class":"forex","price":4046.08800999999994019162841141223907470703125,"price_change_24h":-30.8744599999999991268850862979888916015625,"price_change_pct_24h":-0.75729999999999997317701172505621798336505889892578125,"high_24h":4081.46606000000019776052795350551605224609375,"low_24h":4045.49078999999983352608978748321533203125,"volume_24h":null,"market_cap":null,"logo_url":"https:\/\/img.icons8.com\/color\/48\/gold-bars.png","data_source":"twelvedata","is_active":true,"created_at":"2026-03-11T17:40:37.000000Z","updated_at":"2026-07-28T01:36:07.000000Z"},{"id":21,"external_id":"NZD\/USD","name":"New Zealand Dollar \/ US Dollar","symbol":"NZD\/USD","asset_class":"forex","price":0.57718999999999998085087327126529999077320098876953125,"price_change_24h":-0.0002700000000000000034520997171938461178797297179698944091796875,"price_change_pct_24h":-0.046800000000000001321165399303936283104121685028076171875,"high_24h":0.5779900000000000037658764995285309851169586181640625,"low_24h":0.57667999999999997040589505559182725846767425537109375,"volume_24h":null,"market_cap":null,"logo_url":"https:\/\/hatscripts.github.io\/circle-flags\/flags\/nz.svg","data_source":"twelvedata","is_active":true,"created_at":"2026-03-11T17:40:37.000000Z","updated_at":"2026-07-28T01:35:05.000000Z"},{"id":27,"external_id":"XAG\/USD","name":"Silver \/ US Dollar","symbol":"XAG\/USD","asset_class":"forex","price":24.82000000000000028421709430404007434844970703125,"price_change_24h":null,"price_change_pct_24h":0.68000000000000004884981308350688777863979339599609375,"high_24h":null,"low_24h":null,"volume_24h":null,"market_cap":null,"logo_url":"https:\/\/img.icons8.com\/color\/48\/silver-bars.png","data_source":"twelvedata","is_active":true,"created_at":"2026-03-11T17:40:37.000000Z","updated_at":"2026-03-11T18:45:40.000000Z"},{"id":22,"external_id":"USD\/CAD","name":"US Dollar \/ Canadian Dollar","symbol":"USD\/CAD","asset_class":"forex","price":1.411880000000000023874235921539366245269775390625,"price_change_24h":-0.00059000000000000002962907696968386517255567014217376708984375,"price_change_pct_24h":-0.041799999999999996880273300803310121409595012664794921875,"high_24h":1.4129199999999999537436679020174778997898101806640625,"low_24h":1.4113700000000000134292577058658935129642486572265625,"volume_24h":null,"market_cap":null,"logo_url":"https:\/\/hatscripts.github.io\/circle-flags\/flags\/ca.svg","data_source":"twelvedata","is_active":true,"created_at":"2026-03-11T17:40:37.000000Z","updated_at":"2026-07-28T01:35:05.000000Z"},{"id":18,"external_id":"USD\/JPY","name":"US Dollar \/ Japanese Yen","symbol":"USD\/JPY","asset_class":"forex","price":163.7738699999999880674295127391815185546875,"price_change_24h":0.026579999999999999460431610032173921354115009307861328125,"price_change_pct_24h":0.016199999999999999122923810546126333065330982208251953125,"high_24h":163.835139999999995552570908330380916595458984375,"low_24h":163.656959999999997990016709081828594207763671875,"volume_24h":null,"market_cap":null,"logo_url":"https:\/\/hatscripts.github.io\/circle-flags\/flags\/us.svg","data_source":"twelvedata","is_active":true,"created_at":"2026-03-11T17:40:37.000000Z","updated_at":"2026-07-28T01:35:05.000000Z"},{"id":20,"external_id":"USD\/CHF","name":"US Dollar \/ Swiss Franc","symbol":"USD\/CHF","asset_class":"forex","price":0.8187100000000000488142859467188827693462371826171875,"price_change_24h":-0.000609999999999999973666897634672068306826986372470855712890625,"price_change_pct_24h":-0.07449999999999999678035322858704603277146816253662109375,"high_24h":0.81972999999999995868193991555017419159412384033203125,"low_24h":0.8182199999999999473487832801765762269496917724609375,"volume_24h":null,"market_cap":null,"logo_url":"https:\/\/hatscripts.github.io\/circle-flags\/flags\/ch.svg","data_source":"twelvedata","is_active":true,"created_at":"2026-03-11T17:40:37.000000Z","updated_at":"2026-07-28T01:35:05.000000Z"},{"id":86,"external_id":"AMD","name":"Advanced Micro Devices, Inc.","symbol":"AMD","asset_class":"stock","price":494.95001000000002022716216742992401123046875,"price_change_24h":-27,"price_change_pct_24h":-5.1729000000000002756905814749188721179962158203125,"high_24h":528,"low_24h":476.9299899999999752253643237054347991943359375,"volume_24h":31641349,"market_cap":null,"logo_url":null,"data_source":"twelvedata","is_active":true,"created_at":"2026-07-08T12:02:38.000000Z","updated_at":"2026-07-28T01:37:09.000000Z"},{"id":30,"external_id":"GOOGL","name":"Alphabet Inc.","symbol":"GOOGL","asset_class":"stock","price":326.56000000000000227373675443232059478759765625,"price_change_24h":6.820009999999999905639924691058695316314697265625,"price_change_pct_24h":2.13300000000000000710542735760100185871124267578125,"high_24h":330.4198900000000094223651103675365447998046875,"low_24h":324.45999000000000478394213132560253143310546875,"volume_24h":28340389,"market_cap":null,"logo_url":"https:\/\/static2.finnhub.io\/file\/publicdatany\/finnhubimage\/stock_logo\/GOOG.png","data_source":"twelvedata","is_active":true,"created_at":"2026-03-11T17:40:37.000000Z","updated_at":"2026-07-28T01:36:07.000000Z"},{"id":31,"external_id":"AMZN","name":"Amazon.com, Inc.","symbol":"AMZN","asset_class":"stock","price":231.3899999999999863575794734060764312744140625,"price_change_24h":-0.72000121999999999733432787252240814268589019775390625,"price_change_pct_24h":-0.310199999999999975752729142186581157147884368896484375,"high_24h":235.8899999999999863575794734060764312744140625,"low_24h":230.990010000000012269083526916801929473876953125,"volume_24h":34898916,"market_cap":null,"logo_url":"https:\/\/static2.finnhub.io\/file\/publicdatany\/finnhubimage\/stock_logo\/AMZN.png","data_source":"twelvedata","is_active":true,"created_at":"2026-03-11T17:40:37.000000Z","updated_at":"2026-07-28T01:36:07.000000Z"},{"id":28,"external_id":"AAPL","name":"Apple Inc.","symbol":"AAPL","asset_class":"stock","price":336.91000000000002501110429875552654266357421875,"price_change_24h":3.890010000000000189857018995098769664764404296875,"price_change_pct_24h":1.16809999999999991615595718030817806720733642578125,"high_24h":339.5700100000000247746356762945652008056640625,"low_24h":334.0199890000000095824361778795719146728515625,"volume_24h":45246885,"market_cap":null,"logo_url":"https:\/\/static2.finnhub.io\/file\/publicdatany\/finnhubimage\/stock_logo\/AAPL.png","data_source":"twelvedata","is_active":true,"created_at":"2026-03-11T17:40:37.000000Z","updated_at":"2026-07-28T00:01:35.000000Z"},{"id":40,"external_id":"BA","name":"Boeing Company","symbol":"BA","asset_class":"stock","price":211.5,"price_change_24h":1.979999999999999982236431605997495353221893310546875,"price_change_pct_24h":0.94499999999999995115018691649311222136020660400390625,"high_24h":215.219999999999998863131622783839702606201171875,"low_24h":211.15010000000000900399754755198955535888671875,"volume_24h":5722520,"market_cap":null,"logo_url":"https:\/\/logo.clearbit.com\/boeing.com","data_source":"twelvedata","is_active":true,"created_at":"2026-03-11T17:40:37.000000Z","updated_at":"2026-07-28T01:38:11.000000Z"},{"id":37,"external_id":"INTC","name":"Intel Corporation","symbol":"INTC","asset_class":"stock","price":91.6700000000000017053025658242404460906982421875,"price_change_24h":-0.65000153000000004954728183292900212109088897705078125,"price_change_pct_24h":-0.704099999999999948130380289512686431407928466796875,"high_24h":94.9799000000000006593836587853729724884033203125,"low_24h":86.93999999999999772626324556767940521240234375,"volume_24h":132032608,"market_cap":null,"logo_url":"https:\/\/static2.finnhub.io\/file\/publicdatany\/finnhubimage\/stock_logo\/INTC.png","data_source":"twelvedata","is_active":true,"created_at":"2026-03-11T17:40:37.000000Z","updated_at":"2026-07-28T01:37:09.000000Z"},{"id":41,"external_id":"JPM","name":"JPMorgan Chase \u0026 Co.","symbol":"JPM","asset_class":"stock","price":356.20001000000002022716216742992401123046875,"price_change_24h":2.990019999999999900097691352129913866519927978515625,"price_change_pct_24h":0.8465000000000000301980662698042578995227813720703125,"high_24h":359.049987999999984822352416813373565673828125,"low_24h":352.57999000000000933141564019024372100830078125,"volume_24h":5718439,"market_cap":null,"logo_url":"https:\/\/logo.clearbit.com\/jpmorganchase.com","data_source":"twelvedata","is_active":true,"created_at":"2026-03-11T17:40:37.000000Z","updated_at":"2026-07-28T01:38:11.000000Z"},{"id":34,"external_id":"META","name":"Meta Platforms Inc Class A","symbol":"META","asset_class":"stock","price":593.8700000000000045474735088646411895751953125,"price_change_24h":-1.320009999999999905639924691058695316314697265625,"price_change_pct_24h":-0.2217999999999999971578290569595992565155029296875,"high_24h":611.260009999999965657480061054229736328125,"low_24h":593.1500200000000404543243348598480224609375,"volume_24h":11106056,"market_cap":null,"logo_url":"https:\/\/static2.finnhub.io\/file\/publicdatany\/finnhubimage\/stock_logo\/FB.png","data_source":"twelvedata","is_active":true,"created_at":"2026-03-11T17:40:37.000000Z","updated_at":"2026-07-28T01:37:09.000000Z"},{"id":29,"external_id":"MSFT","name":"Microsoft Corp.","symbol":"MSFT","asset_class":"stock","price":389.1000099999999974897946231067180633544921875,"price_change_24h":7.39998999999999984567011779290623962879180908203125,"price_change_pct_24h":1.9387000000000000898836560736526735126972198486328125,"high_24h":394.20001000000002022716216742992401123046875,"low_24h":387.98998999999997749910107813775539398193359375,"volume_24h":27753671,"market_cap":null,"logo_url":"https:\/\/static2.finnhub.io\/file\/publicdatany\/finnhubimage\/stock_logo\/MSFT.png","data_source":"twelvedata","is_active":true,"created_at":"2026-03-11T17:40:37.000000Z","updated_at":"2026-07-28T01:36:07.000000Z"},{"id":35,"external_id":"NFLX","name":"Netflix, Inc.","symbol":"NFLX","asset_class":"stock","price":70.400000000000005684341886080801486968994140625,"price_change_24h":0.310005189999999986039114219238399527966976165771484375,"price_change_pct_24h":0.44230000000000002646771690706373192369937896728515625,"high_24h":71.650000000000005684341886080801486968994140625,"low_24h":69.8599999999999994315658113919198513031005859375,"volume_24h":38903619,"market_cap":null,"logo_url":"https:\/\/static2.finnhub.io\/file\/publicdatany\/finnhubimage\/stock_logo\/NFLX.png","data_source":"twelvedata","is_active":true,"created_at":"2026-03-11T17:40:37.000000Z","updated_at":"2026-07-28T01:37:09.000000Z"},{"id":33,"external_id":"NVDA","name":"NVIDIA Corporation","symbol":"NVDA","asset_class":"stock","price":196.509989999999987730916473083198070526123046875,"price_change_24h":-10.3300000000000000710542735760100185871124267578125,"price_change_pct_24h":-4.99420000000000019468870959826745092868804931640625,"high_24h":208.75,"low_24h":195.43999999999999772626324556767940521240234375,"volume_24h":153410785,"market_cap":null,"logo_url":"https:\/\/static2.finnhub.io\/file\/publicdatany\/finnhubimage\/stock_logo\/NVDA.png","data_source":"twelvedata","is_active":true,"created_at":"2026-03-11T17:40:37.000000Z","updated_at":"2026-07-28T00:02:37.000000Z"},{"id":38,"external_id":"PYPL","name":"PayPal Holdings Inc","symbol":"PYPL","asset_class":"stock","price":56.07000000000000028421709430404007434844970703125,"price_change_24h":-0.080001829999999996001491808783612214028835296630859375,"price_change_pct_24h":-0.1424999999999999877875467291232780553400516510009765625,"high_24h":56.58500000000000085265128291212022304534912109375,"low_24h":55.47999999999999687361196265555918216705322265625,"volume_24h":13874839,"market_cap":null,"logo_url":"https:\/\/logo.clearbit.com\/paypal.com","data_source":"twelvedata","is_active":true,"created_at":"2026-03-11T17:40:37.000000Z","updated_at":"2026-07-28T01:37:09.000000Z"},{"id":32,"external_id":"TSLA","name":"Tesla, Inc.","symbol":"TSLA","asset_class":"stock","price":309.220000000000027284841053187847137451171875,"price_change_24h":-3.810000000000000053290705182007513940334320068359375,"price_change_pct_24h":-1.2171000000000000706990022081299684941768646240234375,"high_24h":317,"low_24h":304.279999999999972715158946812152862548828125,"volume_24h":43680359,"market_cap":null,"logo_url":"https:\/\/static2.finnhub.io\/file\/publicdatany\/finnhubimage\/stock_logo\/TSLA.png","data_source":"twelvedata","is_active":true,"created_at":"2026-03-11T17:40:37.000000Z","updated_at":"2026-07-28T01:37:09.000000Z"},{"id":39,"external_id":"DIS","name":"The Walt Disney Company","symbol":"DIS","asset_class":"stock","price":96.650000000000005684341886080801486968994140625,"price_change_24h":1.8000000000000000444089209850062616169452667236328125,"price_change_pct_24h":1.897699999999999942446038403431884944438934326171875,"high_24h":97.18999999999999772626324556767940521240234375,"low_24h":95.5139999999999957935870043002068996429443359375,"volume_24h":8218082,"market_cap":null,"logo_url":"https:\/\/logo.clearbit.com\/disney.com","data_source":"twelvedata","is_active":true,"created_at":"2026-03-11T17:40:37.000000Z","updated_at":"2026-07-28T01:37:09.000000Z"},{"id":50,"external_id":"ARKK","name":"ARK Innovation ETF Fund","symbol":"ARKK","asset_class":"etf","price":72.530000000000001136868377216160297393798828125,"price_change_24h":0.63999938999999994582168483248096890747547149658203125,"price_change_pct_24h":0.89019999999999999129585148693877272307872772216796875,"high_24h":73.7000000000000028421709430404007434844970703125,"low_24h":71.219999999999998863131622783839702606201171875,"volume_24h":3931942,"market_cap":null,"logo_url":"https:\/\/logo.clearbit.com\/ark-invest.com","data_source":"twelvedata","is_active":true,"created_at":"2026-03-11T17:40:37.000000Z","updated_at":"2026-07-28T01:39:12.000000Z"},{"id":49,"external_id":"XLF","name":"Financial Select Sector SPDR Fund","symbol":"XLF","asset_class":"etf","price":56.88000000000000255795384873636066913604736328125,"price_change_24h":0.569999689999999947787046039593406021595001220703125,"price_change_pct_24h":1.0122999999999999776179038235568441450595855712890625,"high_24h":57.12989999999999923829818726517260074615478515625,"low_24h":56.58500000000000085265128291212022304534912109375,"volume_24h":28643720,"market_cap":null,"logo_url":"https:\/\/logo.clearbit.com\/ssga.com","data_source":"twelvedata","is_active":true,"created_at":"2026-03-11T17:40:37.000000Z","updated_at":"2026-07-28T01:39:12.000000Z"},{"id":43,"external_id":"QQQ","name":"Invesco QQQ Trust, Series 1","symbol":"QQQ","asset_class":"etf","price":682.1200000000000045474735088646411895751953125,"price_change_24h":-2.109989999999999810142981004901230335235595703125,"price_change_pct_24h":-0.3084000000000000074606987254810519516468048095703125,"high_24h":692.2800300000000106592779047787189483642578125,"low_24h":675.9450100000000247746356762945652008056640625,"volume_24h":42144580,"market_cap":null,"logo_url":"https:\/\/logo.clearbit.com\/invesco.com","data_source":"twelvedata","is_active":true,"created_at":"2026-03-11T17:40:37.000000Z","updated_at":"2026-07-28T01:38:11.000000Z"},{"id":48,"external_id":"TLT","name":"iShares 20+ Year Treasury Bond ETF","symbol":"TLT","asset_class":"etf","price":83.75,"price_change_24h":0.5,"price_change_pct_24h":0.6006000000000000227373675443232059478759765625,"high_24h":83.8700000000000045474735088646411895751953125,"low_24h":83.5199999999999960209606797434389591217041015625,"volume_24h":23535348,"market_cap":null,"logo_url":"https:\/\/logo.clearbit.com\/ishares.com","data_source":"twelvedata","is_active":true,"created_at":"2026-03-11T17:40:37.000000Z","updated_at":"2026-07-28T01:39:12.000000Z"},{"id":46,"external_id":"EEM","name":"iShares MSCI Emerging Markets ETF","symbol":"EEM","asset_class":"etf","price":63.61999999999999744204615126363933086395263671875,"price_change_24h":0.28999710000000000764686092225019820034503936767578125,"price_change_pct_24h":0.457899999999999973709918776876293122768402099609375,"high_24h":64.2650000000000005684341886080801486968994140625,"low_24h":62.844999999999998863131622783839702606201171875,"volume_24h":22543165,"market_cap":null,"logo_url":"https:\/\/logo.clearbit.com\/ishares.com","data_source":"twelvedata","is_active":true,"created_at":"2026-03-11T17:40:37.000000Z","updated_at":"2026-07-28T01:38:11.000000Z"},{"id":44,"external_id":"IWM","name":"iShares Russell 2000 ETF","symbol":"IWM","asset_class":"etf","price":292.91000000000002501110429875552654266357421875,"price_change_24h":1.7399899999999999256061755659175105392932891845703125,"price_change_pct_24h":0.59760000000000002007283228522283025085926055908203125,"high_24h":295.51001000000002250089892186224460601806640625,"low_24h":291.11011000000002013621269725263118743896484375,"volume_24h":18969870,"market_cap":null,"logo_url":"https:\/\/logo.clearbit.com\/ishares.com","data_source":"twelvedata","is_active":true,"created_at":"2026-03-11T17:40:37.000000Z","updated_at":"2026-07-28T01:38:11.000000Z"},{"id":51,"external_id":"DIA","name":"SPDR Dow Jones Industrial Average ETF Trust","symbol":"DIA","asset_class":"etf","price":521.260009999999965657480061054229736328125,"price_change_24h":2.5,"price_change_pct_24h":0.481899999999999995026200849679298698902130126953125,"high_24h":525.3300199999999904321157373487949371337890625,"low_24h":519.29998999999997977283783257007598876953125,"volume_24h":3107115,"market_cap":null,"logo_url":"https:\/\/logo.clearbit.com\/ssga.com","data_source":"twelvedata","is_active":true,"created_at":"2026-03-11T17:40:37.000000Z","updated_at":"2026-07-28T01:39:12.000000Z"},{"id":47,"external_id":"GLD","name":"SPDR Gold Shares","symbol":"GLD","asset_class":"etf","price":374.6299999999999954525264911353588104248046875,"price_change_24h":2.73001000000000004774847184307873249053955078125,"price_change_pct_24h":0.7340999999999999747757328805164434015750885009765625,"high_24h":375.51501000000001795342541299760341644287109375,"low_24h":372.91000000000002501110429875552654266357421875,"volume_24h":3445314,"market_cap":null,"logo_url":"https:\/\/logo.clearbit.com\/ssga.com","data_source":"twelvedata","is_active":true,"created_at":"2026-03-11T17:40:37.000000Z","updated_at":"2026-07-28T01:38:11.000000Z"},{"id":42,"external_id":"SPY","name":"SPDR S\u0026P 500 ETF Trust","symbol":"SPY","asset_class":"etf","price":739.090026999999963663867674767971038818359375,"price_change_24h":0.1600341799999999981007903215868282131850719451904296875,"price_change_pct_24h":0.0217000000000000005384581669432009221054613590240478515625,"high_24h":745.5300300000000106592779047787189483642578125,"low_24h":735.8700000000000045474735088646411895751953125,"volume_24h":41105825,"market_cap":null,"logo_url":"https:\/\/logo.clearbit.com\/ssga.com","data_source":"twelvedata","is_active":true,"created_at":"2026-03-11T17:40:37.000000Z","updated_at":"2026-07-28T01:38:11.000000Z"},{"id":45,"external_id":"VTI","name":"VANGUARD TOTAL STOCK MKT ETF","symbol":"VTI","asset_class":"etf","price":365.1799899999999752253643237054347991943359375,"price_change_24h":0.380004879999999989337311490089632570743560791015625,"price_change_pct_24h":0.10420000000000000095479180117763462476432323455810546875,"high_24h":368.29998999999997977283783257007598876953125,"low_24h":363.60998999999998204657458700239658355712890625,"volume_24h":2863576,"market_cap":null,"logo_url":"https:\/\/logo.clearbit.com\/vanguard.com","data_source":"twelvedata","is_active":true,"created_at":"2026-03-11T17:40:37.000000Z","updated_at":"2026-07-28T01:38:11.000000Z"},{"id":54,"external_id":"DJI","name":"Dow Jones Industrial Average","symbol":"DJI","asset_class":"index","price":39170.3499999999985448084771633148193359375,"price_change_24h":null,"price_change_pct_24h":0.340000000000000024424906541753443889319896697998046875,"high_24h":null,"low_24h":null,"volume_24h":null,"market_cap":null,"logo_url":"https:\/\/logo.clearbit.com\/dowjones.com","data_source":"twelvedata","is_active":true,"created_at":"2026-03-11T17:40:37.000000Z","updated_at":"2026-03-11T18:45:40.000000Z"},{"id":59,"external_id":"STOXX50E","name":"EURO STOXX 50","symbol":"STOXX50E","asset_class":"index","price":4982.760000000000218278728425502777099609375,"price_change_24h":null,"price_change_pct_24h":0.2800000000000000266453525910037569701671600341796875,"high_24h":null,"low_24h":null,"volume_24h":null,"market_cap":null,"logo_url":"https:\/\/logo.clearbit.com\/stoxx.com","data_source":"twelvedata","is_active":true,"created_at":"2026-03-11T17:40:37.000000Z","updated_at":"2026-03-11T18:45:40.000000Z"},{"id":55,"external_id":"FTSE","name":"FTSE 100","symbol":"FTSE","asset_class":"index","price":7722.5500000000001818989403545856475830078125,"price_change_24h":null,"price_change_pct_24h":-0.179999999999999993338661852249060757458209991455078125,"high_24h":null,"low_24h":null,"volume_24h":null,"market_cap":null,"logo_url":"https:\/\/logo.clearbit.com\/lseg.com","data_source":"twelvedata","is_active":true,"created_at":"2026-03-11T17:40:37.000000Z","updated_at":"2026-03-11T18:45:40.000000Z"},{"id":56,"external_id":"DAX","name":"Global X DAX Germany ETF","symbol":"DAX","asset_class":"index","price":43.82000000000000028421709430404007434844970703125,"price_change_24h":-0.368000029999999977992075628208112902939319610595703125,"price_change_pct_24h":-0.8327999999999999847233311811578460037708282470703125,"high_24h":44.06700099999999764577296446077525615692138671875,"low_24h":43.57000000000000028421709430404007434844970703125,"volume_24h":30800,"market_cap":null,"logo_url":"https:\/\/logo.clearbit.com\/deutsche-boerse.com","data_source":"twelvedata","is_active":true,"created_at":"2026-03-11T17:40:37.000000Z","updated_at":"2026-07-19T00:00:11.000000Z"},{"id":58,"external_id":"HSI","name":"Hang Seng Index","symbol":"HSI","asset_class":"index","price":16529.47999999999956344254314899444580078125,"price_change_24h":null,"price_change_pct_24h":-0.729999999999999982236431605997495353221893310546875,"high_24h":null,"low_24h":null,"volume_24h":null,"market_cap":null,"logo_url":"https:\/\/logo.clearbit.com\/hsi.com.hk","data_source":"twelvedata","is_active":true,"created_at":"2026-03-11T17:40:37.000000Z","updated_at":"2026-03-11T18:45:40.000000Z"},{"id":53,"external_id":"IXIC","name":"NASDAQ Composite","symbol":"IXIC","asset_class":"index","price":16274.940000000000509317032992839813232421875,"price_change_24h":null,"price_change_pct_24h":0.81999999999999995115018691649311222136020660400390625,"high_24h":null,"low_24h":null,"volume_24h":null,"market_cap":null,"logo_url":"https:\/\/logo.clearbit.com\/nasdaq.com","data_source":"twelvedata","is_active":true,"created_at":"2026-03-11T17:40:37.000000Z","updated_at":"2026-03-11T18:45:40.000000Z"},{"id":57,"external_id":"N225","name":"Nikkei 225","symbol":"N225","asset_class":"index","price":39688.9400000000023283064365386962890625,"price_change_24h":null,"price_change_pct_24h":1.12000000000000010658141036401502788066864013671875,"high_24h":null,"low_24h":null,"volume_24h":null,"market_cap":null,"logo_url":"https:\/\/logo.clearbit.com\/nikkei.com","data_source":"twelvedata","is_active":true,"created_at":"2026-03-11T17:40:37.000000Z","updated_at":"2026-03-11T18:45:40.000000Z"},{"id":52,"external_id":"SPX","name":"S\u0026P 500","symbol":"SPX","asset_class":"index","price":5175.27000000000043655745685100555419921875,"price_change_24h":null,"price_change_pct_24h":0.560000000000000053290705182007513940334320068359375,"high_24h":null,"low_24h":null,"volume_24h":null,"market_cap":null,"logo_url":"https:\/\/logo.clearbit.com\/spglobal.com","data_source":"twelvedata","is_active":true,"created_at":"2026-03-11T17:40:37.000000Z","updated_at":"2026-03-11T18:45:40.000000Z"}],
            filteredAssets: [],

            init() {
                this.filterAssets();
            },

            filterAssets() {
                this.filteredAssets = this.allAssets.filter(a => a.asset_class === this.filterClass);
                // If current selection not in filtered list, clear it
                if (this.selectedAssetId && !this.filteredAssets.find(a => a.id == this.selectedAssetId)) {
                    this.selectedAssetId = '';
                    this.selectedAsset = null;
                }
            },

            onAssetChange() {
                const id = parseInt(this.selectedAssetId);
                this.selectedAsset = this.allAssets.find(a => a.id === id) || null;
                if (this.selectedAsset) {
                    this.updateChart(this.selectedAsset);
                }
            },

            updateChart(asset) {
                let cleanSymbol = asset.symbol
                    .toUpperCase()
                    .replace(/\//g, '')
                    .replace(/-/g, '')
                    .replace(/\s+/g, '');

                let tvSymbol = '';

                if (asset.asset_class === 'crypto') {
                    if (!cleanSymbol.endsWith('USDT')) {
                        cleanSymbol += 'USDT';
                    }
                    tvSymbol = 'BINANCE:' + cleanSymbol;
                } else if (asset.asset_class === 'forex') {
                    tvSymbol = 'FX:' + cleanSymbol;
                } else if (asset.asset_class === 'index') {
                    tvSymbol = 'TVC:' + cleanSymbol;
                } else if (asset.asset_class === 'etf') {
                    tvSymbol = 'AMEX:' + cleanSymbol;
                } else {
                    tvSymbol = 'NASDAQ:' + cleanSymbol;
                }

                console.log('Loading symbol:', tvSymbol);
                initChart(tvSymbol);
            },

            formatPrice(price) {
                if (!price) return '0.00';
                price = parseFloat(price);
                if (price >= 1) return price.toLocaleString('en-US', { minimumFractionDigits: 2, maximumFractionDigits: 2 });
                if (price >= 0.01) return price.toFixed(4);
                return price.toFixed(6);
            },

            confirmTrade(action) {
                if (!this.selectedAssetId) {
                    Swal.fire({ title: 'Select an Asset', text: 'Please choose an asset before placing a trade.', icon: 'info', background: '#161A1E', color: '#E8EAED' });
                    return;
                }
                if (!this.amount || this.amount <= 0) {
                    Swal.fire({ title: 'Enter Amount', text: 'Please enter a valid trade amount.', icon: 'info', background: '#161A1E', color: '#E8EAED' });
                    return;
                }

                const modeLabel = this.isDemo ? ' (DEMO)' : '';
                const typeLabel = this.tradeType === 'binary' ? 'Binary' : 'Spot';
                const profitLoss = (this.amount * this.leverage / 100).toFixed(2);

                const cs = '$';

                Swal.fire({
                    title: `Confirm ${action.toUpperCase()} ${typeLabel}${modeLabel}`,
                    html: `
                        <div style="text-align:left; font-size:13px; color:#9BA1A6;">
                            <p><strong>Asset:</strong> ${this.selectedAsset.symbol} — ${this.selectedAsset.name}</p>
                            <p><strong>Entry Price:</strong> ${cs}${this.formatPrice(this.selectedAsset.price)}</p>
                            <p><strong>Amount:</strong> ${cs}${Number(this.amount).toFixed(2)}</p>
                            <p><strong>Leverage:</strong> ${this.leverage}x</p>
                            ${this.tradeType === 'binary' ? '<p><strong>Duration:</strong> ' + this.durationOptions.find(d => d.value === this.duration)?.label + '</p>' : '<p><strong>Duration:</strong> No expiry (spot)</p>'}
                            <p><strong>Potential P/L:</strong> <span style="color:#22C55E">+${cs}${profitLoss}</span> / <span style="color:#EF4444">-${cs}${profitLoss}</span></p>
                        </div>
                    `,
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: action === 'buy' ? '#22C55E' : '#EF4444',
                    cancelButtonColor: '#2A2F36',
                    confirmButtonText: `${action.toUpperCase()} Now`,
                    cancelButtonText: "Cancel",
                    background: '#161A1E',
                    color: '#E8EAED'
                }).then((result) => {
                    if (result.isConfirmed) {
                        this.$refs.tradeAction.value = action;
                        document.getElementById('tradeForm').submit();
                    }
                });
            }
        };
    }
</script>


<script>
    document.addEventListener('DOMContentLoaded', function() {
        const countdowns = document.querySelectorAll('.trade-countdown');
        if (countdowns.length === 0) return;

        setInterval(function() {
            countdowns.forEach(function(el) {
                const expires = new Date(el.dataset.expires).getTime();
                const now = Date.now();
                const diff = expires - now;

                if (diff <= 0) {
                    el.textContent = 'Settling...';
                    el.classList.add('text-warning');
                    // Auto-process expired binary trade
                    const tradeId = el.dataset.tradeId;
                    if (!el.dataset.processing) {
                        el.dataset.processing = 'true';
                        fetch("{{ route('user.trade') }}s/process", {
                            method: 'POST',
                            headers: { 'Content-Type': 'application/json', 'X-CSRF-TOKEN': '33urHJ6yXCmJ10M5P6VQb1q8wXyBAhRpUNl6CGKT' },
                            body: JSON.stringify({ trade_id: tradeId })
                        })
                        .then(r => r.json())
                        .then(data => {
                            if (data.success) {
                                setTimeout(() => location.reload(), 1500);
                            }
                        });
                    }
                    return;
                }

                const h = Math.floor(diff / 3600000);
                const m = Math.floor((diff % 3600000) / 60000);
                const s = Math.floor((diff % 60000) / 1000);
                el.textContent = (h > 0 ? h + 'h ' : '') + m + 'm ' + s + 's';
            });
        }, 1000);
    });
</script>


<script>
    function requestCloseSpot(tradeId) {
        Swal.fire({
            title: 'Request Close?',
            text: 'This will send a close request to admin for settlement.',
            icon: 'question',
            showCancelButton: true,
            confirmButtonColor: '#EF4444',
            cancelButtonColor: '#2A2F36',
            confirmButtonText: 'Yes, Request Close',
            background: '#161A1E',
            color: '#E8EAED'
        }).then((result) => {
            if (result.isConfirmed) {
                fetch("{{ route('user.trade') }}s/request-close", {
                    method: 'POST',
                    headers: { 'Content-Type': 'application/json', 'X-CSRF-TOKEN': '33urHJ6yXCmJ10M5P6VQb1q8wXyBAhRpUNl6CGKT' },
                    body: JSON.stringify({ trade_id: tradeId })
                })
                .then(r => r.json())
                .then(data => {
                    if (data.success) {
                        Swal.fire({ title: 'Submitted', text: data.message, icon: 'success', background: '#161A1E', color: '#E8EAED' })
                            .then(() => location.reload());
                    } else {
                        Swal.fire({ title: 'Error', text: data.message, icon: 'error', background: '#161A1E', color: '#E8EAED' });
                    }
                });
            }
        });
    }
</script>
   






</body>
</html>

