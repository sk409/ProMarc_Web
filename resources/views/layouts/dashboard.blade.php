@extends('layouts.app')

@section("links")
<link rel="stylesheet" href="{{asset("css/dashboard.css")}}">
@endsection

@section('app-content')
<div id="dashboard" class="h-100">
    <div>
        @include("components.header", ["profileImagePath" => $user->profile_image_path])
    </div>
    <el-container class="h-100">
        <el-aside class="h-100">
            <el-menu class="text-center h-100" default-active="{{$activeIndex}}" background-color="#545c64"
                text-color="#fff" active-text-color="#ffd04b">
                <el-menu-item index="1">
                    <div v-on:click="transition('{{route("dashboard.purchased_materials")}}')">取得した教材</div>
                </el-menu-item>
                <el-menu-item index="2">
                    <div v-on:click="transition('{{route("dashboard.created_materials")}}')">作成した教材</div>
                </el-menu-item>
                <el-menu-item index="3">
                    <div v-on:click="transition('{{route("dashboard.lessons")}}')">作成したレッスン</div>
                </el-menu-item>
                <el-menu-item index="4">
                    <div v-on:click="transition('{{route("dashboard.following")}}')">フォロー</div>
                </el-menu-item>
                <el-menu-item index="5">
                    <div v-on:click="transition('{{route("dashboard.follower")}}')">フォロワー</div>
                </el-menu-item>
                <el-menu-item index="6">
                    <div v-on:click="transition('{{route("dashboard.chat_rooms")}}')">チャットルーム</div>
                </el-menu-item>
            </el-menu>
        </el-aside>
        <el-main>
            @yield("dashboard-content")
        </el-main>
    </el-container>
</div>
@endsection
