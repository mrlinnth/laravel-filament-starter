import MainMenu from '@/components/menus/MainMenu';

function Navigation() {
    return (
        <div className="w-full ">
            <nav className="navbar ">
                <div className="flex-1">
                    <a href="/" className="btn btn-ghost normal-case text-xl">
                        Logo here
                    </a>
                </div>
                <div className="flex-none hidden lg:block">
                    <ul className="menu menu-horizontal">
                        <MainMenu />
                    </ul>
                </div>
                <div className="flex-none lg:hidden">
                    <label htmlFor="my-drawer-3" className="btn btn-square btn-ghost">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            className="inline-block w-6 h-6 stroke-current"
                        >
                            <path
                                strokeLinecap="round"
                                strokeLinejoin="round"
                                strokeWidth="2"
                                d="M4 6h16M4 12h16M4 18h16"
                            />
                        </svg>
                    </label>
                </div>
            </nav>
        </div>
    );
}

export default Navigation;
