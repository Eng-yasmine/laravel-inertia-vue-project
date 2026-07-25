<script setup>
import { Form } from "@inertiajs/vue3";
</script>

<template>
    <!--
        الفورم في نص الصفحة:
        الصفحة كلها flex + center
        والصندوق نفسه له عرض ثابت وحدود خفيفة
    -->
    <div
        style="
            min-height: calc(100vh - 80px);
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        "
    >
        <Form
            action="/register"
            method="post"
            style="
                width: 100%;
                max-width: 420px;
                padding: 32px;
                border: 1px solid #e5e5e5;
                border-radius: 8px;
                background: #fff;
                display: flex;
                flex-direction: column;
                gap: 16px;
            "
        >
            <h1
                style="
                    margin: 0 0 8px;
                    text-align: center;
                    font-size: 1.5rem;
                    color: #111;
                "
            >
                Create Account
            </h1>

            <div style="display: flex; flex-direction: column; gap: 6px">
                <label for="name" style="font-size: 0.9rem; color: #333"
                    >Name</label
                >
                <input
                    id="name"
                    type="text"
                    name="name"
                    required
                    style="
                        padding: 10px 12px;
                        border: 1px solid #ccc;
                        border-radius: 6px;
                        font-size: 1rem;
                    "
                />
            </div>

            <div style="display: flex; flex-direction: column; gap: 6px">
                <label for="email" style="font-size: 0.9rem; color: #333"
                    >Email</label
                >
                <input
                    id="email"
                    type="email"
                    name="email"
                    required
                    style="
                        padding: 10px 12px;
                        border: 1px solid #ccc;
                        border-radius: 6px;
                        font-size: 1rem;
                    "
                />
            </div>

            <div style="display: flex; flex-direction: column; gap: 6px">
                <label for="password" style="font-size: 0.9rem; color: #333"
                    >Password</label
                >
                <input
                    id="password"
                    type="password"
                    name="password"
                    required
                    style="
                        padding: 10px 12px;
                        border: 1px solid #ccc;
                        border-radius: 6px;
                        font-size: 1rem;
                    "
                />
            </div>

            <div style="display: flex; flex-direction: column; gap: 6px">
                <label
                    for="password_confirmation"
                    style="font-size: 0.9rem; color: #333"
                    >Confirm Password</label
                >
                <input
                    id="password_confirmation"
                    type="password"
                    name="password_confirmation"
                    required
                    style="
                        padding: 10px 12px;
                        border: 1px solid #ccc;
                        border-radius: 6px;
                        font-size: 1rem;
                    "
                />
            </div>

            <button
                type="submit"
                style="
                    margin-top: 8px;
                    padding: 12px;
                    border: none;
                    border-radius: 6px;
                    background: #111;
                    color: #fff;
                    font-size: 1rem;
                    cursor: pointer;
                "
            >
                Create User
            </button>
        </Form>
    </div>
</template>
