<script setup>
import { h, defineProps } from "vue";
import { NIcon, NButton, NDropdown, NTooltip } from "naive-ui";
import { Link } from '@inertiajs/vue3';

const renderIcon = (iconName) => {
    return () => {
        return h(NIcon, null, {
            default: () => h('svg', { class: 'icon' }, [
                h('use', { 'xlink:href': `#${iconName}` })
            ])
        });
    };
};

const props = defineProps({
    options: Array
});

</script>

<template>
    <div class="banner">
        <div id="container">
            <a href="" class="logo">
                <img src="../../../public/Img/p.png" alt="Flowbite Logo" />
                <span class="brand-name">Entorn Virtual d’Aprenentatge</span>
            </a>
        </div>
        <div id="menu">
            <ul id="show">
            </ul>
            <div id="responsive_menu">
                <!--<n-dropdown :options="props.auth.user ? loggedOptions : unloggedOptions">
                    <n-button>Menu</n-button>
                </n-dropdown>-->
            </div>
            <Link href="/Cursos">
            <NButton>Cursos</NButton>
            </Link>            
            <Link href="/Continguts">
            <NButton>Continguts</NButton>
            </Link>            
            <Link href="/login">
            <NButton>Login</NButton>
            </Link>
            <Link href="/register">
            <NButton>Register</NButton>
            </Link>        
        </div>
    </div>
</template>


<style>
/* styles.css */

.n-button__content {
    color: white;
    font-size: 15px;
    font-weight: 600;
}

#menu .n-button {
    margin-left: 10px;
    margin-right: 10px;
}

#responsive_menu {
    display: none;
    margin-right: 20px;
}

.name {
    text-decoration: none;
    color: white;
}

body {
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
}

.banner {
    background-color: #292828;
    border-bottom: 1px solid #e2e8f0;
    color: white;
    display: grid;
    width: 100%;
    margin-bottom: -1px;
    grid-template-columns: 10% 90%;
    grid-template-rows: 70px;
    grid-column-gap: 0px;
    grid-row-gap: 0px;
}

.n-dropdown-menu {
    background-color: #292828;
}

.n-dropdown-option-body__label,
.n-dropdown-option-body__prefix--show-icon svg {
    color: white;
    font-weight: 600;
}

#container {
    max-width: 1140px;
    margin: 0 auto;
    padding: 0 20px;
    grid-area: 1 / 1 / 2 / 2;
    display: flex;
    justify-content: center;
    align-items: center;
}

#menu {
    display: flex;
    grid-area: 1 / 2 / 2 / 3;
    justify-content: center;
    align-items: center;
}

#menu li {
    display: inline-block;
    margin-left: 10px;
    margin-right: 10px;
}

.logo {
    display: flex;
    align-items: center;
    text-decoration: none;
    color: inherit;
}

.logo img {
    height: 40px;
    width: auto;
}

.brand-name {
    font-size: 20px;
    font-weight: 600;
    margin-left: 8px;
}

.name svg {
    width: 30px;
}

@media screen and (max-width: 600px) {
    #responsive_menu {
        display: flex;
    }

    #show {
        display: none;
    }
}

/* SVG icons styles */
.icon {
    width: 1em;
    height: 1em;
    vertical-align: -0.15em;
    fill: currentColor;
    overflow: hidden;
}
</style>
