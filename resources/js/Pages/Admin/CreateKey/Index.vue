<script setup>

import AppLayout from '@/Layouts/AppLayoutAdmin.vue'
import { Head } from '@inertiajs/vue3'
import { ref } from 'vue'
import axios from 'axios'

const password = ref('')
const type = ref('bcrypt')
const result = ref('')

const types = [
    { title: 'Bcrypt (Laravel)', value: 'bcrypt' },
    { title: 'MD5', value: 'md5' },
    { title: 'SHA1', value: 'sha1' },
    { title: 'SHA256', value: 'sha256' },
    { title: 'SHA512', value: 'sha512' },
]

const generate = async () => {

    if (!password.value) return

    const response = await axios.post('/admin/createkey', {
        password: password.value,
        type: type.value
    })

    result.value = response.data.result
}

</script>

<template>

<Head title="Create Password" />

<AppLayout>

    <div class="mb-6">
        <h1 class="text-h5 font-weight-medium">
            Create Password
        </h1>
    </div>

    <v-card rounded="lg" class="pa-8">

        <v-text-field
            v-model="password"
            label="Password"
        />

        <v-select
            v-model="type"
            :items="types"
            label="Crypto Type"
            class="mt-4"
        />

        <v-btn
            color="primary"
            class="mt-4"
            @click="generate"
        >
            Gerar
        </v-btn>

        <v-text-field
            v-if="result"
            v-model="result"
            readonly
            class="mt-6"
        />

    </v-card>

</AppLayout>

</template>