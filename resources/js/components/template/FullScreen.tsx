import servdLogo from '@/assets/servd-logo-final.png';
import ProgressBar from '@/components/shared/ProgressBar';

function FullScreen({ children }: any) {
    return (
        <div className="drawer drawer-end mx-auto">
            <input id="my-drawer-3" type="checkbox" className="drawer-toggle" />
            <div className="drawer-content flex flex-col">
                <div className="container mx-auto py-4">
                    <div className="navbar">
                        <div className="flex-1">
                            <img src={servdLogo} alt="Servd" className="w-36" />
                        </div>
                        <div className="flex-none">
                            <button className=" btn btn-outline w-0 min-h-0 h-6 rounded	px-5 border-primary">EN</button>
                        </div>
                    </div>
                    <ProgressBar></ProgressBar>
                </div>
                {children}
            </div>
        </div>
    );
}

export default FullScreen;
