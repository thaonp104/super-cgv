var myApp = angular.module('myApp',['ngRoute']);
myApp.config(function($routeProvider){
    $routeProvider
    .when('/login',{
        templateUrl:'DKDN.html',
        controller:'secondController'
    })
    .when('/now-showing',{
        templateUrl:'PDC.html',
        controller:'thirdController'
    })
    .when('/',{
        templateUrl: 'main.html',
        controller: 'mainController'
    })
});
myApp.controller('mainController', ['$scope','$log',function($scope, $log, nameService){
    $scope.main = 0;
    $scope.len= 0;
    $scope.listFilm = [];

    for(let i = 0; i< 15 ;i++) {
        if(i==0)
            $scope.listFilm.push({
                cover: "images/poster240.png",
                name: "Chúng Ta",
                star: 1
            });
        if(i==1)
            $scope.listFilm.push({
                cover: "images/240_14_7.jpg",
                name: "Yêu Nhầm Bạn Thân",
                star: 4
            });
        if(i==2)
            $scope.listFilm.push({
                cover: "images/240_10_27.jpg",
                name: "Đại Úy Marvel",
                star: 2
            });
        if(i==3)
            $scope.listFilm.push({
                cover: "images/240_14_19.jpg",
                name: "Mật Vụ Thanh Trừng",
                star: 1
            });
        if(i==4)
            $scope.listFilm.push({
                cover: "images/240_14_18.jpg",
                name: "Khách Sạn Mumbai",
                star: 1
            });
        if(i==5)
            $scope.listFilm.push({
                cover: "images/240_12_6.jpg",
                name: "Công Viên Kì Diệu",
                star: 3
            });
        if(i==6)
            $scope.listFilm.push({
                cover: "images/240_14_16.jpg",
                name: "Ông Hoàng Đường Đua",
                star: 4
            });
        if(i==7)
            $scope.listFilm.push({
                cover: "images/final_240.jpg",
                name: "Bảy Viên Ngọc Rồng",
                star: 2
            });
        if(i==8)
            $scope.listFilm.push({
                cover: "images/240_12_3.jpg",
                name: "Hai Phượng",
                star: 1
            });
        if(i==9)
            $scope.listFilm.push({
                cover: "images/240_10_47.jpg",
                name: "Chị Trợ Lí Của Anh",
                star: 4
            });
        if(i==10)
            $scope.listFilm.push({
                cover: "images/240_14_2.jpg",
                name: "Hạnh Phúc Của Mẹ",
                star: 3
            });
        if(i==11)
            $scope.listFilm.push({
                cover: "images/vqdn240.jpg",
                name: "Vu Quy Đại Náo",
                star: 2
            });
        if(i==12)
            $scope.listFilm.push({
                cover: "images/240_14_14.jpg",
                name: "Chúa Quỷ",
                star: 1
            });
        if(i==13)
            $scope.listFilm.push({
                cover: "images/tof_240.jpg",
                name: "Zombie Đại Hạ Giá",
                star: 1
            });
        if(i==14)
            $scope.listFilm.push({
                cover: "images/240_14_13.jpg",
                name: "Đóa Hồng Của Tôi",
                star: 2
            });
    }
}]);
myApp.controller('secondController', ['$scope','$log','$routeParams',function($scope, $log,$routeParams,nameService){
    $scope.main = 1;
    $scope.len= 0;
}]);
myApp.controller('thirdController', ['$scope','$log','$routeParams',function($scope, $log,$routeParams,nameService){
    $scope.main = 1;
    $scope.len= 0;
}]);
