<footer class="absolute bottom-0 w-full mb-1 text-center">
    <x-text><small>Larastart © <span id="footerCurrentYear"></span></small></x-text>
    {{-- 
        Handle footer current year.

        These codes below are called here instead of being inside app.js to 
        avoid FOUC should app.js type is defined as a module. 
        --------------------------------------------------------------------------}}
    <script>
        const element = document.getElementById("footerCurrentYear");
        element.innerHTML = new Date().getFullYear();
    </script>
</footer>