<svg xmlns="http://www.w3.org/2000/svg" width="400" height="100" viewBox="0 0 600 100">
    <!-- Define the gradient -->
    <defs>
        <linearGradient id="gradient" x1="0%" y1="0%" x2="100%" y2="0%">
            <stop offset="0%" style="stop-color:#f5c076; stop-opacity:1" />
            <stop offset="100%" style="stop-color:#eb6f6f; stop-opacity:1" />
        </linearGradient>
    </defs>

    <!-- Text: Todo App -->
    <text x="50" y="70" font-family="Figtree, sans-serif" font-size="48" font-weight="bold" fill="url(#gradient)">
        To
        <!-- Circle with tick mark in first 'o' -->
        <tspan>
            {{-- <circle cx="125" cy="50" r="22" fill="none" stroke="url(#gradient)" stroke-width="4" /> --}}
            <path d="M 117 50 l 5 7 l 12 -12" fill="none" stroke="url(#gradient)" stroke-width="4" />
        </tspan>
        do
        <!-- Circle with tick mark in second 'o' -->
        <tspan>
            <circle cx="200" cy="50" r="22" fill="none" stroke="url(#gradient)" stroke-width="4" />
            <path d="M 192 50 l 5 7 l 12 -12" fill="none" stroke="url(#gradient)" stroke-width="4" />
        </tspan>
        App
    </text>
</svg>
