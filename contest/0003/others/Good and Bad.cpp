#include<cmath>
#include<ctime>
#include<cstdio>
#define MN 51000000
#define N 10
#define ll long long
#define ld long double
#define MAXN 22000
#define MAXM 2001
using namespace std;

int p[MN/10],num=0,cou[MN],Mavis[MAXN][MAXM];
ll mmh=0,n=1e8,ans=0;
bool bo[MN],V[MN];
ll _phi(ll n,int m){
    if (m==0) return n;
    if (n<MAXN&&m<MAXM&&Mavis[n][m]!=-1) return Mavis[n][m];
    if (p[m]>=n) return 1;
    return _phi(n,m-1)-_phi(n/p[m],m-1);
}
inline ll PI(ll n){
    if (n<MN) return cou[n]+1;
    int m=(int)(sqrt(n)+0.5),c=(int)(cbrt(n)+0.5),a=cou[c];ll MMH;
    MMH=_phi(n,cou[c])+cou[c]-1;
    for (int i=cou[c]+1;p[i]<=m;i++) MMH-=PI(n/p[i])-PI(p[i])+1;
    return MMH+1;
}
void dfs(int c,ll no,int o){
    if (no/p[c]<p[c]){
        if (!o) mmh++;else if (no>=p[c]) mmh+=PI(no)-c;
		return;
    }
    for (int i=0;no;i++,o^=1,no/=p[c]) dfs(c+1,no,o);
}
int main(){
    printf("%lld\n",n);
    cou[1]=0;ans=1;
    for (int i=2;i<MN;i++){
        cou[i]=cou[i-1];
        if (!bo[i]) p[++num]=i,cou[i]++,V[i]=0;
        for (int j=1;j<=num&&i*p[j]<MN;j++){
            bo[i*p[j]]=1;V[i*p[j]]=V[i]^1;
            if (i%p[j]==0) break;
        }
    }
    //for (int i=2;i<=n;i++)ans+=V[i];printf("%lld\n",ans);
    for (int i=1;i<MAXN;i++)
    for (int j=0;j<MAXM;j++)
    if (j==0) Mavis[i][j]=i;else Mavis[i][j]=Mavis[i][j-1]-Mavis[i/p[j]][j-1];
    puts("Ready!");
    dfs(1,n,0);
    printf("%lld\n",mmh);
    printf("%lf\n",1.*clock()/CLOCKS_PER_SEC);
}
/*
1000000000000
Ready!
499999738687
24.512000


100000000
Ready!
49998058
0.740000
*/
