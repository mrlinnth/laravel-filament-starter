import { Link } from '@inertiajs/inertia-react';

interface Props {
    text?: string;
    goTo?: any;
    classNames?: string;
}

function LinkButton({
    text = 'Click Here',
    classNames = 'btn-primary gradient normal-case rounded-full',
    goTo = '',
}: Props) {
    return (
        <Link href={goTo} className={`btn ${classNames}`} as="button" type="button">
            {text}
        </Link>
    );
}

export default LinkButton;
