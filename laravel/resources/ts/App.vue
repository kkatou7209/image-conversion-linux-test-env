<script setup lang="ts">
import { mdiClipboard, mdiFile } from '@mdi/js';


</script>

<template>
    <v-app>
        <v-container>
            <v-row justify="center" align="center">
                <v-sheet class="pa-10 mt-16" rounded="lg" elevation="10" width="700" height="500">
                    <div style="display: flex; justify-content: center">
                        <h2 class="text-h4">画像変換</h2>
                    </div>
                    <br>
                    <v-select
                        label="変換先"
                        :items="['JPEG', 'PNG', 'WEBP', 'HEIC']"
                    />
                    <v-file-input prepend-icon="" :prepend-inner-icon="mdiFile" label="ファイルを選択" accept="image/*" class="mt-16" chips/>
                    <br>

                    <v-btn block color="primary" height="70">変換</v-btn>
                </v-sheet>
            </v-row>
        </v-container>
    </v-app>
</template>
