<dropdown-trigger class="h-9 flex items-center">
    @isset($user->email)
        <img
            src="https://secure.gravatar.com/avatar/{{ md5(\Illuminate\Support\Str::lower($user->email)) }}?size=512"
            class="rounded-full w-8 h-8 mr-3"
            alt="Votre avatar"
        />
    @endisset

    <span class="text-90">
        {{ $user->name ?? $user->email ?? __('globals.admin') }}
    </span>
</dropdown-trigger>

<dropdown-menu slot="menu" width="200" direction="rtl">
    <ul class="list-reset">
        <li>
            <a href="{{ route('front.homepage') }}"
               class="block no-underline text-90 hover:bg-30 p-3"
               title="{{ __('globals.website.back_page_homepage') }}">
                {{ __('globals.website.back_page_homepage') }}
            </a>
        </li>
        <li>
            <a href="{{ route('nova.logout') }}"
               class="block no-underline text-90 hover:bg-30 p-3"
               title="{{ __('globals.logout') }}">
                {{ __('globals.logout') }}
            </a>
        </li>
    </ul>
</dropdown-menu>
