import type { UserConfig } from "vitepress";

/**
 * User-editable VitePress configuration.
 *
 * Customize this file to change your documentation's appearance and structure.
 * Do NOT edit config.mts - it contains package-managed settings.
 */
const docsConfig: UserConfig = {
    // Site metadata
    title: "Laravel Starter Next",
    description: "Next generation Laravel starter template documentation",

    // Theme configuration
    themeConfig: {
        logo: "/logo.svg",

        nav: [
            { text: "Home", link: "/" },
            { text: "Guide", link: "/guide/" },
            { text: "DX Notes", link: "/dx-notes/overview" },
        ],

        sidebar: {
            "/guide/": [
                {
                    text: "Get Started",
                    items: [
                        { text: "Overview", link: "/guide/" },
                        { text: "Techstack", link: "/guide/techstack" },
                        { text: "Containers", link: "/guide/containers" },
                        { text: "Installation", link: "/guide/installation" },
                        { text: "Update", link: "/guide/update" },
                        { text: "Deployment", link: "/guide/deployment" },
                        { text: "Devhub", link: "/guide/devhub" },
                    ],
                },
            ],
            "/dx-notes/": [
                {
                    text: "DX Notes",
                    items: [
                        { text: "Overview", link: "/dx-notes/overview" },
                        { text: "Debugging", link: "/dx-notes/debugging" },
                        { text: "Act", link: "/dx-notes/act" },
                    ],
                },
            ],
        },

        socialLinks: [{ icon: "github", link: "https://github.com/laravel-ready/laravel-starter-next" }],

        footer: {
            message: "Released under the MIT License.",
            copyright: `Copyright © ${new Date().getFullYear()}`,
        },

        search: {
            provider: "local",
        },

        editLink: {
            pattern:
                "https://github.com/laravel-ready/laravel-starter-next/edit/main/resources/docs/:path",
            text: "Edit this page on GitHub",
        },
    },
};

export default docsConfig;
