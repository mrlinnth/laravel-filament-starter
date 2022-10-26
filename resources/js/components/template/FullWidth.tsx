import Navigation from '@/components/shared/Navigation';
import MainMenu from '@/components/menus/MainMenu';

function FullWidth({ children }: any) {
    return (
        <div className="drawer drawer-end mx-auto">
            <input id="my-drawer-3" type="checkbox" className="drawer-toggle" />
            <div className="drawer-content flex flex-col">
                <Navigation />
                {children}
            </div>
            <div className="drawer-side">
                <label htmlFor="my-drawer-3" className="drawer-overlay" />
                <ul className="menu p-4 overflow-y-auto w-80 bg-base-100">
                    <MainMenu />
                </ul>
            </div>
        </div>
    );
}

export default FullWidth;
