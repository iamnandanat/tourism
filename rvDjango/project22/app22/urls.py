from django.urls import path,include
from.import views

urlpatterns = [
    path('hello',views.hello,name='hello'),
    path('index',views.index, name='index'),
]
