import LinkButton from '@/components/buttons/LinkButton';
import { Link } from '@inertiajs/inertia-react';

function MainMenu() {
    return (
        <>
            <li>
                <Link href="/">Home</Link>
            </li>
            <li>
                <Link href="/servd">Servd</Link>
            </li>
            <li>
                <Link href="/about">About</Link>
            </li>
            <li>
                <Link href="/">
                    <LinkButton text="Login" />
                </Link>
            </li>
        </>
    );
}

export default MainMenu;
