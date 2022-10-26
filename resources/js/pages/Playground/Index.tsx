interface Props {
    greeting: string;
    loginRoute: string;
}
export default function Index({ greeting, loginRoute }: Props) {
    return (
        <div className="hero min-h-screen">
            <div className="text-center hero-content text-3xl font-bold">
                <div>
                    <div className="mt-4 flex justify-center">
                        <div className="card w-96 bg-base-100 shadow-xl text-neutral-content">
                            <div className="card-body items-center text-center">
                                <h2 className="card-title">Hello</h2>
                                <p>{greeting}</p>
                                <div className="card-actions justify-end">
                                    <a href={loginRoute} className="btn btn-primary">
                                        Login
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div className="grid grid-cols-4 gap-4 m-4">
                        <button type="button" className="btn">
                            Default Button
                        </button>
                        <button type="button" className="btn btn-primary">
                            Primary Button
                        </button>
                        <button type="button" className="btn btn-secondary">
                            Secondary Button
                        </button>
                        <button type="button" className="btn btn-accent">
                            Accent Button
                        </button>
                        <button type="button" className="btn btn-info">
                            Info Button
                        </button>
                        <button type="button" className="btn btn-success">
                            Success Button
                        </button>
                        <button type="button" className="btn btn-error">
                            Error Button
                        </button>
                        <button type="button" className="btn btn-warning">
                            Warning Button
                        </button>
                        <button type="button" className="btn btn-outline">
                            Outline Button
                        </button>
                        <button type="button" className="btn btn-outline btn-primary">
                            Outline Button
                        </button>
                        <button type="button" className="btn btn-ghost">
                            Ghost Button
                        </button>
                        <button type="button" className="btn btn-link">
                            Link Button
                        </button>
                    </div>
                </div>
            </div>
        </div>
    );
}
