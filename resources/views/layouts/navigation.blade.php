<div class="navbar flex bg-base-300 shadow-md z-10">
    <div class="navbar-start">
        <div class="drawer drawer-mobile">
            <input id="sidebar" type="checkbox" class="drawer-toggle" />
            <div class="drawer-content flex flex-col">
                <!-- Page content here -->
                <label for="sidebar" class="btn btn-ghost btn-circle drawer-button">
                    <i class="fa-solid fa-bars"></i>
                </label>
            </div>
            <div class="drawer-side z-10">
                <label for="sidebar" aria-label="close sidebar" class="drawer-overlay"></label>
                <ul class="menu p-4 w-80 min-h-full bg-base-300 text-base-content">
                    <h2 class="text-lg font-bold mb-4">
                        Menu <i class="fa-solid fa-arrow-turn-down"></i>
                    </h2>
                    <!-- Sidebar content here -->
                    <li>
                        <a><i class="fa-solid fa-user-group"></i>Clientes</a>
                    </li>
                    <li>
                        <a><i class="fa-solid fa-building"></i>Condomínios</a>
                    </li>
                    <li>
                        <a><i class="fa-solid fa-file-contract"></i>Contratos</a>
                    </li>
                    <li>
                        <a><i class="fa-solid fa-user-tie"></i>Funcionários</a>
                    </li>
                    <li>
                        <a href="/users"><i class="fa-solid fa-user-tie"></i>Usuários</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="navbar-center">
        <a class="btn btn-ghost text-xl" href="#">
            <div class="avatar">
                <div class="w-10 rounded-full">
                    <img src="jm-logo.png" alt="" />
                </div>
            </div>
            JM Automation
        </a>
    </div>
    <div class="navbar-end">
        <div class="dropdown dropdown-end">
            <button class="btn btn-ghost">
                <i class="fa-solid fa-circle-user"></i>{{ Auth::user()->name }}
            </button>
            <ul tabindex="0" class="dropdown-content z-[1] menu p-2 shadow bg-base-100 rounded-box w-52">
                <li>
                    <form>
                        <button type="submit" class="btn btn-ghost">Sair</button>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</div>
