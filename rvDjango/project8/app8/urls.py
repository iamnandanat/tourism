from django.urls import path,include
from .import views
app_name='app8'
urlpatterns=[
    path('hello',views.hello,name='hello'),
    path('',views.index,name='index'),
    path('register',views.register,name='register'),
    path('login/', views.login, name="login"),
    path('home/<int:id>', views.home, name="home"),
    path('mail',views.mail,name='mail'),
]