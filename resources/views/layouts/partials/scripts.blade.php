{{-- Put scripts related resources here. --}}

{{--  
    Handle dark mode toggle when the page is loaded.

    These codes below are called here instead of being inside app.js to avoid
    FOUC should app.js type is defined as a module. 
--------------------------------------------------------------------------}}
<script>
    if (localStorage.theme === "light" || (!("theme" in localStorage) && window.matchMedia("(prefers-color-scheme: light)").matches)) {
        localStorage.theme = 'light';
        document.documentElement.classList.remove("dark");
    } else if (localStorage.theme === "dark" || (!("theme" in localStorage) && window.matchMedia("(prefers-color-scheme: dark)").matches)) {
        localStorage.theme = 'dark';
        document.documentElement.classList.add("dark");
    };
</script>

{{-- app.js --}}
@vite('resources/js/app.js')

{{-- Script to be embedded in blade views.--}}
@stack('script')