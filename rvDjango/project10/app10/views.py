from django.shortcuts import render
from django.http import HttpResponse
from .forms import RegisterForm
def hello(request):
    return HttpResponse("Welcome to Django")
def index (request):
    name='content'
    return render(request,'index.html',{'datas:name'})
def register(request):
    form=RegisterForm()
    return render(request,'register.html',{'form':form})

# Create your views here.
