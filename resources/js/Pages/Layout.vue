<script setup>
import { Link } from "@inertiajs/vue3";
</script>

<template>
    <div>
        <!--
            الناف بار: روابط Inertia Link
            بتتنقل بين الصفحات من غير reload كامل
        -->
        <nav
            style="
                display: flex;
                justify-content: center;
                align-items: center;
                gap: 32px;
                padding: 12px 20px;
                background: #f6f6f6;
                margin-bottom: 24px;
            "
        >
            <Link href="/" style="color: #111; text-decoration: none">Home</Link>
            <Link href="/about" style="color: #111; text-decoration: none"
                >About</Link
            >
            <Link href="/user" style="color: #111; text-decoration: none"
                >Users</Link
            >
        </nav>

    
        <main style="padding: 0 20px">
            <slot />
        </main>
    </div>
</template>
