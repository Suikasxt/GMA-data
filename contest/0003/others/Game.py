z,m=1,0

def work(x):
    global z,m
    z+=m*x
    z,m=m,z
for i in range(30000):
	work(2)
z+=m
print(z/m)
n=10**1000
mmh=0
f=1
while(n>0):
    p=z//m
    z-=p*m
    N=n*z//m
    mmh+=f*(n*(n+1)//2*p+n*N)
    f*=-1
    n=N
    z,m=m,z
print(mmh)
ans=0
while(mmh>0):
	ans+=mmh%10
	mmh//=10
print(ans)