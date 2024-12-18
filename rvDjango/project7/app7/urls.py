from django.urls import path
from .import views
app_name='app7'
urlpatterns=[
    path('hello',views.hello,name='hello'),
    path('',views.index,name='index'),
    path('register',views.register,name='register'),
]