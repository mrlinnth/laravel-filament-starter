import './bootstrap';
import '../css/app.css';
import { createRoot } from 'react-dom/client';
import { createInertiaApp } from '@inertiajs/inertia-react';
import { InertiaProgress } from '@inertiajs/progress';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import FullWidth from '@/components/template/FullWidth';

const appName = window.document.getElementsByTagName('title')[0]?.innerText || 'Servd';
const layout = (page: any) => <FullWidth>{page}</FullWidth>;

createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: (name) => {
        const page = resolvePageComponent(`./pages/${name}.tsx`, import.meta.glob('./pages/**/*.tsx'));

        page.then((module: any) => {
            module.default.layout = module.default.layout || layout;
        });

        return page;
    },
    setup({ el, App, props }) {
        const root = createRoot(el);
        root.render(<App {...props} />);
    },
});

InertiaProgress.init({ color: '#C70074' });
