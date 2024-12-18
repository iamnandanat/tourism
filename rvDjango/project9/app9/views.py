from django.shortcuts import render, redirect
from django.http import HttpResponse
from .forms import RegisterForm, LoginForm
from .models import Register
from django.contrib import messages
# Create your views here.
def hello(request):
    return HttpResponse("Welcome to Django")
def index(request):
    name='Register Counter'
    return render(request,'index.html',{'datas':name})
def register(request):
    if request.method=='POST':
        form=RegisterForm(request.POST)
        if form.is_valid():
            name=form.cleaned_data['Name']
            age=form.cleaned_data['Age']
            place=form.cleaned_data['Place']
            email=form.cleaned_data['Email']
            password=form.cleaned_data['Password']
            confirmpassword=form.cleaned_data['ConfirmPassword']
            user=Register.objects.filter(Email=email).exists()
            if user:
                messages.warning(request,"Mail already exists")
                return redirect('/register')
            elif password!=confirmpassword:
                messages.warning(request,"Password already exists")
                return redirect('/register')
            else:
                tab=Register(Name=name, Age=age, Place=place, Email=email, Password=password)
                tab.save()
                messages.success(request,"Data Saved")
                return redirect('/')
    else: 
        form=RegisterForm()
    return render(request,'register.html',{'form':form})

def login(request):
    if request.method=='POST':
        form=LoginForm(request.POST)
        if form.is_valid():
            email=form.cleaned_data['Email']
            password=form.cleaned_data['Password']

            try:
                user=Register.objects.get(Email=email)
                if not user:
                    messages.warning(request,"Mail does not exist")
                    return redirect('/login')
                elif password!=user.Password:
                    messages.warning(request,"Password vdoes not match")
                    return redirect('/login')
                else:
                    messages.success(request,"Login success")
                    return redirect('/home/%s' % user.id )
            except:
                messages.warning(request,"email or password incorrect")
                return redirect('/login')

    else: 
        form=LoginForm()
    return render(request,'login.html',{'form':form})
def home(request,id):
    user=Register.objects.get(id=id)
    return render(request,'home.html',{'user':user})