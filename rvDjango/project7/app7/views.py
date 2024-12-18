from django.shortcuts import render,redirect
from django.http import HttpResponse
from.forms import RegisterForm
from django.contrib import messages
# Create your views here.
def hello(request):
    return HttpResponse('welcome to Django')
def index(request):
    return render(request,'index.html')
def register(request):
    if request.method=='POST':
        form=RegisterForm(request.POST)
        if form.is_valid():
            form.save()
            messages.success(request,"Data saved")
            return redirect('/')
    else:
        form=RegisterForm()
    return render(request,'register.html',{'form':form})    