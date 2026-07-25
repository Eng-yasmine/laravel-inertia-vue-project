<script setup>
/*
    مهم: الاسم Layout بـ حرف L كبير (PascalCase)
    Vue أحيانًا بيتعامل مع <layout> كأنها HTML tag عادية
    ومش بيقرأها كـ component → الناف مش بتظهر
*/
import Layout from "./Layout.vue";
</script>

<template>
    <!--
        منفعش تحط style على <Layout> نفسه
        لأن الـ style بيروح للـ div الخارجي بتاع Layout
        فيدخل معاه الـ nav → الناف تنزل لتحت

        الحل: الـ style على محتوى الصفحة بس جوه slot
    -->
    <Layout>
        <div
            style="
                color: blue;
                display: flex;
                flex-direction: column;
                align-items: center;
                padding-top: 10rem;
                font-family: Verdana, Geneva, Tahoma, sans-serif;
                font-size: larger;
            "
        >
            <h1>Welcom to vue js</h1>
            <p>inertia laravel vue js</p>
        </div>
    </Layout>
</template>
