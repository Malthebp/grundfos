   <nav class="bottomNav">
        <ul>
            <li>
                <a href="/index" {{ (Request::is('index') ? 'class=active' : '') }}>
                    <i class="icon-gr-home" aria-hidden="true"></i>
                    <p>Home</p>
                </a>
            </li>
            <li>
                <a href="/catalogue" {{ (Request::is('catalogue') ? 'class=active' : '') }}>
                    <i class="icon-gr-folder" aria-hidden="true"></i>
                    <p>Catalogue</p>
                </a>
            </li>
            <li>
                <a href="/profile" {{ (Request::is('profile') ? 'class=active' : '') }}>
                    <i class="icon-gr-user" aria-hidden="true"></i>
                    <p>Profile</p>
                </a>
            </li>
            <li>
                <a href="http://www.grundfos.com/">
                    <img src="images/logo-icon.png">
                    <p>Grundfos</p>
                </a>
            </li>
        </ul>
    </nav>