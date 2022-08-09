<div class="relative flex items-center">
    <button data-target="notificationDropdown" data-toggle="dropdown" class="relative flex items-center h-8" aria-label="Notification Toggle" aria-expanded="false" aria-controls="notificationDropdown">
        <svg xmlns="http://www.w3.org/2000/svg" class="stroke-blue-600 fill-blue-600 dark:stroke-blue-400 dark:fill-blue-400 hover:stroke-blue-500 hover:fill-blue-500 dark:hover:stroke-blue-500 dark:hover:fill-blue-500" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
            <path d="M10 5a2 2 0 0 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6" />
            <path d="M9 17v1a3 3 0 0 0 6 0v-1" />
        </svg>
        <div class="absolute right-0 w-2 h-2 bg-red-500 rounded-full top-1"></div>
    </button>
    <div id="notificationDropdown" tabindex="-1" class="absolute right-0 z-30 invisible w-64 py-2 transition origin-top-right scale-0 bg-white border border-gray-100 rounded-md shadow-md opacity-0 lg:w-80 dark:border-gray-700 dark:bg-gray-700 top-16">
        <ul class="overflow-y-auto divide-y divide-gray-200 max-h-80 dark:divide-gray-600">
            <li>
                <a href="#" class="block px-4 py-2 hover:text-blue-500">
                    <div class="h-8 text-xs font-light">You have received a purchase order amount of $104.85.</div>
                    <div class="text-xs text-right"><small>30 minutes ago</small></div>
                </a>
            </li>
            <li>
                <a href="#" class="block px-4 py-2 hover:text-blue-500">
                    <div class="h-8 text-xs font-light">You have 3 new task requests by Khafizi Noh to approve.</div>
                    <div class="text-xs text-right"><small>5 hours ago</small></div>
                </a>
            </li>
            <li>
                <a href="#" class="block px-4 py-2 hover:text-blue-500">
                    <div class="h-8 text-xs font-light">You have 99 unread messages.</div>
                    <div class="text-xs text-right"><small>10 days ago</small></div>
                </a>
            </li>
            <li>
                <a href="#" class="block px-4 py-2 hover:text-blue-500">
                    <div class="h-8 text-xs font-light">You have 6 new notifications.</div>
                    <div class="text-xs text-right"><small>2 weeks ago</small></div>
                </a>
            </li>
            <li>
                <a href="#" class="block px-4 py-2 hover:text-blue-500">
                    <div class="h-8 text-xs font-light">You have a pending delivery for order #18035025.</div>
                    <div class="text-xs text-right"><small>3 months ago</small></div>
                </a>
            </li>
            <li>
                <a href="#" class="block px-4 py-2 hover:text-blue-500">
                    <div class="h-8 text-xs font-light">You have made a new transaction amout of $308.95.</div>
                    <div class="text-xs text-right"><small>4 years ago</small></div>
                </a>
            </li>
        </ul>
        <a href="#" class="inline-block w-full pt-2 mb-1 text-xs text-center text-blue-600 border-t border-gray-200 max-h-80 dark:border-gray-600 dark:text-blue-400 hover:text-blue-500 dark:hover:text-blue-500">View all notifications</a>
    </div>
</div>