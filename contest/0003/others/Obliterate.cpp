#include<queue>
#include<cstdio>
#include<cstring>
#include<algorithm>
#define ll big
using namespace std;
const int bi=1e9,MN=15;
const int N=4;
const int MAXN=531441*9;
char c[2];
struct big{
    int a[MN];
    inline big(){
        memset(a,0,sizeof(a));
        a[0]=1;
    }
    inline void read(){
        register int i,j,k;
        scanf("%s",c);k=strlen(c);
        a[0]=(k+3)/4;
        for (i=0;i<k;i++) j=(k-i+3)/4,a[j]=a[j]*10+c[i]-48;
    }
    inline void pr(){
        register int i;
        printf("%d",a[a[0]]);
        for (i=a[0]-1;i;i--) printf("%09d",a[i]);
    }
    inline big operator =(int x){
        if (x==0){
            memset(a,0,sizeof(a));
            a[0]=1;
        }
        a[0]=0;
        while (x){
            a[0]++;
            a[a[0]]=x%bi;
            x/=bi;
        }
        if (!a[0]) a[0]=1;
    }
    inline big(int x){
        *this=x;
    }
    inline void gl(){
        while(!a[a[0]]&&a[0]>1) a[0]--;
    }
    inline void operator =(big x){
        register int i;
        a[0]=x.a[0];
        for (i=1;i<=a[0];i++) a[i]=x.a[i];
    }
    inline bool operator >(big y){
        if (a[0]!=y.a[0]) return a[0]>y.a[0];
        for (register int i=a[0];i;i--){
            if (a[i]!=y.a[i]) return a[i]>y.a[i];
        }
        return 0;
    }
    inline bool operator >=(const big y){
        if (a[0]!=y.a[0]) return a[0]>y.a[0];
        for (register int i=a[0];i;i--){
            if (a[i]!=y.a[i]) return a[i]>y.a[i];
        }
        return 1;
    }
    inline bool operator <(big y){
        if (a[0]!=y.a[0]) return a[0]<y.a[0];
        for (register int i=a[0];i;i--){
            if (a[i]!=y.a[i]) return a[i]<y.a[i];
        }
        return 0;
    }
    inline bool operator <=(big y){
        if (a[0]!=y.a[0]) return a[0]<y.a[0];
        for (register int i=a[0];i;i--){
            if (a[i]!=y.a[i]) return a[i]<y.a[i];
        }
        return 1;
    }
    inline bool operator ==(big y){
        if (a[0]!=y.a[0]) return 0;
        for (register int i=a[0];i;i--){
            if (a[i]!=y.a[i]) return 0;
        }
        return 1;
    }
    inline bool operator !=(big y){
        return !(*this==y);
    }
    inline bool operator ==(int y){
        big x=y;
        return *this==x;
    }
    inline bool operator !=(int y){
        return !(*this==y);
    }
    inline void swap(big &a,big &b){
        big x=a;a=b;b=x;
    }
    inline big operator +(big x){
        big r;
        if (a[0]<x.a[0]) r.a[0]=x.a[0];else r.a[0]=a[0];
        for (register int i=1;i<=r.a[0];i++) r.a[i]=(i<=a[0]?a[i]:0)+(i<=x.a[0]?x.a[i]:0);
        for (register int i=1;i<=r.a[0];i++)
        if (r.a[i]>=bi){
            r.a[i]-=bi;r.a[i+1]++;
            if (i==r.a[0]) r.a[0]++;
        }
        return r;
    }
    inline big operator +(int x){
        big r;r=*this;
        r.a[1]+=x;
        for (register int i=1;i<=r.a[0];i++)
        if (r.a[i]>=bi){
            r.a[i]-=bi;r.a[i+1]++;
            if (i==r.a[0]) r.a[0]++;
        }else break;
        return r;
    }
    inline big operator -(big x){
        if (*this<x) swap(*this,x);
        register int i;
        big r;
        if (a[0]<x.a[0]) r.a[0]=x.a[0];else r.a[0]=a[0];
        for (i=1;i<=r.a[0];i++) r.a[i]=a[i]-(i<=x.a[0]?x.a[i]:0);
        for (i=1;i<=r.a[0];i++)
        if (r.a[i]<0){
            r.a[i+1]--;r.a[i]+=bi;
        }
        r.gl();
        return r;
    }
    inline big operator -(int x){
        register int i=1;
        big r;r=*this;
        r.a[1]-=x;
        while (r.a[i]<0) r.a[i+1]--,r.a[i]+=bi,i++;
        r.gl();
        return r;
    }
    inline big operator *(big y){
        register int i,j;
        big r;r.a[0]=a[0]+y.a[0]-1;
        for (i=1;i<=a[0];i++)
        for (j=1;j<=y.a[0];j++){
            r.a[i+j-1]+=a[i]*y.a[j];
            if (r.a[i+j-1]>=bi){
                r.a[i+j]+=r.a[i+j-1]/bi;
                r.a[i+j-1]%=bi;
                if (i+j-1==r.a[0]) r.a[0]++;
            }
        }
        for (i=1;i<=r.a[0];i++)
        if (r.a[i]>=bi){
            r.a[i+1]+=r.a[i]/bi;
            r.a[i]%=bi;
            if (i==r.a[0]) r.a[0]++;
        }
        return r;
    }
    inline big operator *(int y){
        register int i,j;
        big r;r.a[0]=a[0];
        for (i=1;i<=a[0];i++)
        r.a[i]=a[i]*y;
        for (i=1;i<=r.a[0];i++)
        if (r.a[i]>=bi){
            r.a[i+1]+=r.a[i]/bi;
            r.a[i]%=bi;
            if (i==r.a[0]) r.a[0]++;
        }
        return r;
    }
    inline big half(){
        register int i,j;big r=*this;
        for (i=r.a[0];i>1;i--) r.a[i-1]+=(r.a[i]%2)*bi,r.a[i]>>=1;
        r.a[1]>>=1;
        r.gl();
        return r;
    }
    inline big operator /(big y){
        register int i,j;
        big r,l,mid,rq=*this;
        r.a[0]=rq.a[0]+1;r.a[r.a[0]]=1;
        while(r>l){
            mid=(l+r+big(1)).half();
            if (mid*y<=rq) l=mid;else r=mid-big(1);
        }
        return l;
    }
    inline big operator %(big y){
        register int i,j;
        big rq=*this;
        return rq-(rq/y*y);
    }
    inline big operator ^(int y){
        big ans=1;
        big rq=*this;
        while(y){
            if (y&1) ans=ans*rq;
            y>>=1;
            rq=rq*rq;
        }
        return ans;
    }
    inline big operator ^(big y){
        big ans=1;
        big rq=*this;
        while(y!=0){
            if (y.a[1]&1) ans=ans*rq;
            y=y/2;
            rq=rq*rq;
        }
        return ans;
    }
};
int i;
struct na{
	int x,z;
	na(int xx=0,int zz=0):x(xx),z(zz){}
}no;
int n,m,x,y,z,a[21],t;
ll f[2][MAXN+1],_f[2][MAXN+1],ans,_ans,an,_an;
int v[2][MAXN+1];
queue <na> q;
inline int gx(int x,int q1,int q2){int k=0;for (register int i=m-1;i>=0;i--) k=k*3+(i==x?q1:(i==x+1?q2:a[i]));/*printf("%d %d %d %d\n",x,q1,q2,k);*/return k;}
inline void up(int x,int z){
	//printf("%d %d\n",z,no.z);
	x++;int k=x&1;
	if (v[k][z]!=x) v[k][z]=x,f[k][z]=0,q.push(na(x,z));
	f[k][z]=f[k][z]+an;
}
bool bo[10][10];
int main(){
	register int i,j;
	/*int sum=0;
	for (int t=0;t<(1<<(N*N));t++){
		for (i=0;i<N;i++)
		for (j=0;j<N;j++)
		bo[i+1][j+1]=t&(1<<(i*N+j));
		bool u=1;
		for (i=1;i<=N;i++)
		for (j=1;j<=N;j++) if (!(bo[i][j]||bo[i-1][j]||bo[i][j-1]||bo[i+1][j]||bo[i][j+1])) u=0;
		sum+=u;
	}
	printf("%lld\n",sum);
	return 0;*/
	n=m=N;
	f[0][0]=v[0][0]=1;
	q.push(na(0,0));
	while(!q.empty()){
		no=q.front();q.pop();
		an=f[no.x&1][no.z];
		x=no.x%m;y=no.x/m;
		for (i=0;i<m;i++) a[i]=0;
		for (i=0,j=no.z;j;i++,j/=3) a[i]=j%3;
		//printf("%d %d %d:%d%d %d\n",y,x,no.z,a[0],a[1],an);
		if (no.x==n*m){
			ans=ans+an;
			continue;
		}
		up(no.x,gx(x-1,(x&&a[x-1]==2)?2:1,2));
		t=((x&&a[x-1]==2)||a[x]==2)?1:0;
		if ((a[x]||y==0)&&(y!=m-1||x!=n-1||t)&&(x==0||a[x-1]||y!=m-1)) up(no.x,gx(x-1,x?a[x-1]:0,t));
	}
	ans.pr();
	//printf("%Lf\n",ans);
}
/*
12
2603510257812272007602666005183563780279922077
13
451803233670290192938323095537362700934415980993023433
14
299624906403253780837722041979448648614417149864627538623
299624906403253781622431887423993602059257348463102263296

15
75920925315147351643321026644303797291226237802087526929477529215
75920925315147351924389610852606341782988153987958213381105647616

75920925315147351643321026644303797291226237802087526929477529215
31.84s
*/
