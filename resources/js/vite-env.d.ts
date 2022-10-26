// / <reference types="vite/client" />
interface ImportMetaEnv {
    readonly MODE: string;
    readonly VITE_APP_NAME: string;
    // more env variables...
}

interface ImportMeta {
    readonly env: ImportMetaEnv;
}
